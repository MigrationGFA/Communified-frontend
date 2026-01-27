//let root_url = 'https://testnet.getfundedafrica.com/portal/';
// console.log('base url', getBaseUrl());

if (getBaseUrl() == 'https://testnet.getfundedafrica.com') {
    root_url = 'https://testnet.getfundedafrica.com/portal/';
} else if (getBaseUrl() == 'https://getfundedafrica.com') {
    root_url = 'https://getfundedafrica.com/portal/';
} else if (getBaseUrl() == 'https://fgnalat.getfundedafrica.com') {
    root_url = 'https://fgnalat.getfundedafrica.com/portal/';
}
else if (getBaseUrl() == 'http://localhost:9696') {
    root_url = 'http://localhost:9696/';
}

function create_event_calender() {

    var title = document.getElementById('title').value;
    var host = document.getElementById('host').value;
    var start_time = document.getElementById('start-date').value;
    var new_date = new Date(start_time);
    var end_time = '';
    var all_day = document.getElementById('customSwitch3');

    if(all_day.checked){
        all_day = 'Yes';
        allday = 1;
    }else {
        all_day = 'No'
        allday = 0;
    }
    
    var guests = document.getElementById('guests').value;
    var location = document.getElementById('event-location').value;
    var description = document.getElementById('event-description-editor').value;
    var total_event = document.getElementById('total_event').value;
    

    var form_data = new FormData();
    form_data.append("title", title);
    form_data.append("host", host);
    form_data.append("start_time", start_time);
    form_data.append("end_time", end_time);
    form_data.append("all_day", all_day);
    form_data.append("guests", guests);
    form_data.append("location", location);
    form_data.append("description", description);
    
    $.ajax({
        url: root_url+"gfa/create_event_calender",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
        },
        success: function(result){
            document.getElementById('total_event').innerHTML = parseInt(total_event) + 1;
            var new_event = {
                id: total_event,
                url: root_url+"gfa/meeting?q="+result,
                title: title,
                start: new Date(start_time),
                end: new Date(end_time),
                allDay: 0,
                extendedProps: {
                  calendar: "Business"
                }
              };

              console.log(new_event);

            

            events.push(new_event);
            window.location.reload();
            const elements = document.getElementsByClassName("modal-backdrop");
            while (elements.length > 0) elements[0].remove();
            swal("Successful", "Your meeting has been successfully scheduled", "success");
            
        }
    });
}

function get_event_calender() {

    
    var user_email = document.getElementById('user_email').value;
    console.log(user_email);
    var form_data = new FormData();
    form_data.append("user_email", user_email);
    
    $.ajax({
        url: root_url+"gfa/get_event_calender",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
        },
        success: function(result){
            console.log('get event', result);
            var total_event_num = result.length;
            result = JSON.parse(result);
            

            for(var i = 0; i < total_event_num; i++) {
                var datax = result[i];
                if(datax.Status != 'Declined'){
                    all_day = (datax.AllDay == 'Yes') ? 1 : 0;
                    var new_event = {
                        id: i+1,
                        url: root_url+"gfa/meeting?q="+datax.ID,
                        title: datax.Title,
                        start: new Date(datax.StartTime),
                        end: new Date(datax.EndTime),
                        allDay: all_day,
                        extendedProps: {
                        calendar: "Business"
                        }
                    };

                    events.push(new_event);
                }
                
                //$('#calendar').load(location.href +" #calendar");
            }
        }
    });
}

function get_users(){
    var search_guest_value = document.getElementsByClassName("select2-search__field")[0].value;
    console.log(search_guest_value);

    var form_data = new FormData();
    form_data.append("search_param", search_guest_value);
    
    $.ajax({
        url: root_url+"gfa/get_search_users",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
        },
        success: function(result){

            var total_users = result.length;
            result = JSON.parse(result);
            

            for(var i = 0; i < total_users; i++) {
                var option = document.createDocumentFragment();
                var single_option = `<option value="${result[i].Contact_Email}">${result[i].Primary_Contact_Name}</option>`;
                var set_option = option
                .appendChild(document.createElement('option'));
                set_option.setAttribute("value", result[i].Contact_Email);
                set_option.textContent = result[i].Primary_Contact_Name;
                document.getElementById('guests').appendChild(option);
            }

            

            
            //console.log(result);
        }
    });
}

window.onload= function(){
    get_event_calender();
    console.log('search field', document.getElementsByClassName("select2-search__field"));
    document.getElementsByClassName("select2-search__field")[0].setAttribute("id","guest_search");
    document.getElementById('guest_search').setAttribute("onkeyup", "get_users()");
}

function set_guest(){
    document.getElementsByClassName("select2-search__field")[0].setAttribute("id","guest_search");
    document.getElementById('guest_search').setAttribute("onkeyup", "get_users()");
}

function setEventStatus(status, id) {
 
    var form_data = new FormData();
    form_data.append("status", status);
    form_data.append("event_id", id);
    
    $.ajax({
        url: root_url+"gfa/set_event_status",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            document.getElementById('status-btn').style.display = 'none';
            document.getElementById('status-btn-load').style.display = 'block';
        },
        success: function(result){
            document.getElementById('status-pend').style.display = 'none';
            document.getElementById('status-final').style.display = 'block';
            document.getElementById('set-status').innerHTML = status;

            document.getElementById('status-btn').style.display = 'block';
            document.getElementById('status-btn-load').style.display = 'none';
            
        }
    });
}

function getpost(approved) {
    
    
    var data = {
        "query" : approved,
    };
    $.ajax({
        url: "https://media.getfundedafrica.com/wp-json/api/gfapostsearch",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            
        },
        success: function(result){
            
            
            var output = result;
        var wrapper = document.getElementById("startup_news");

          var myHTML = '';
        
          for (var i = 0; i < output.length; i++) {
            myHTML += `
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <a href="${output[i].guid}">
				<h6><a href="${output[i].guid}" target="_blank">${output[i].post_title}</a></h6>
				</a>
                
				
              </div>
            </li>
            `;
          }
          
        //   if(myHTML = ''){
        //       myHTML = '<p>No latest news</p>';
        //   }
        
          wrapper.innerHTML = myHTML;
            
        }
    });
}

function getallposts(limit) {
    
    
    var data = {
        "limit": limit
    };
    $.ajax({
        url: "https://media.getfundedafrica.com/wp-json/api/gfaposts",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            
        },
        success: function(result){
            
            
            var output = result;
        var wrapper = document.getElementById("startup_news_rand");

          var myHTML = '';
        
          for (var i = 0; i < output.length; i++) {
            myHTML += `
            <li class="timeline-item" style="padding-bottom:2rem;">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <a href="${output[i].guid}">
				<h6><a href="${output[i].guid}" target="_blank">${output[i].post_title}</a></h6>
				</a>
                
				
              </div>
            </li>
            `;
          }
          
        //   if(myHTML = ''){
        //       myHTML = '<p>No latest news</p>';
        //   }
        
          wrapper.innerHTML = myHTML;
            
        }
    });
}

function getpostcount(approved) {
    
    
    var data = {
        "query" : approved,
    };
    $.ajax({
        url: "https://media.getfundedafrica.com/wp-json/api/gfapostsearchcount",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            
        },
        success: function(result){
            var wrapper = document.getElementById("media_count");
            var myHTML = result.length;
            wrapper.innerHTML = myHTML;
            
        }
    });
}

function getallsearchedposts(approved) {
    
    
    var data = {
        "query" : approved,
    };
    $.ajax({
        url: "https://media.getfundedafrica.com/wp-json/api/gfapostsearchcount",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            
        },
        success: function(result){
            
             
            var output = result;
        var wrapper = document.getElementById("startup_news");

          var myHTML = '';
        
          for (var i = 0; i < output.length; i++) {
            myHTML += `
            <li class="timeline-item" style="padding-bottom:2rem;">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <a href="${output[i].guid}">
				<h6><a href="${output[i].guid}" target="_blank">${output[i].post_title}</a></h6>
				</a>
                
				
              </div>
            </li>
            `;
          }
          
        //   if(myHTML = ''){
        //       myHTML = '<p>No latest news</p>';
        //   }
        
          wrapper.innerHTML = myHTML;
            
        }
    });
}

const redeem_estore_credit = () => { 

    let credit = document.getElementById('credit').value;
    let amount = parseInt(credit) * 750;

    const characters = 'abcdefghijklmnopqrstuvwxyz123456789';
    let coupon_code = '';
    const charactersLength = characters.length;
    for(let i = 0; i < 10; i++) {
        coupon_code += 
        characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    let email = document.getElementById('email').value;

    var date = new Date();
    date.setDate(date.getDate() + 30);

    let date_expires = formatDate(date);

    let credit_redeem_message = document.getElementById('credit_redeem_message').value;



    let data = {
        "code": coupon_code,
        "discount_type": "fixed_cart",
        "amount": String(amount),
        "email_restrictions": email,
        "description": "",
        "usage_limit_per_user": 1,
        "usage_limit": 1,
        "date_expires": date_expires
    };

    $.ajax({
        url: "https://estore.getfundedafrica.com/wp-json/wc/v3/coupons?consumer_key=ck_c8f213701a6deda717f336a7685048ccfe07e4ba&consumer_secret=cs_63ec4d100f3c089022615326120d06e1d49498b0",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        dataType: "json",
        contentType: "application/json",
        cache: false,
        error: function() {
            $(".displayRedeem").html('Error Request');
            $('#redeem_btn').prop("disabled", false);
        },
        beforeSend: function(){
            $('#redeem_btn').prop("disabled", true);
            $(".displayRedeem").html(`Requesting please wait...`);
        },
        success: function(output){
            console.log(output);
            let coupon_id = output.id;

            $.ajax({
                url: "https://estore.getfundedafrica.com/wp-json/api/gfaapplycoupon",
                method: "POST",
                data: JSON.stringify(
                    {
                        "coupon_id": coupon_id,
                    }
                ),
                processData: false,
                dataType: "json",
                contentType: "application/json",
                cache: false,
                beforeSend: function(){
                },
                success: function(result){
                    console.log(result);
                    $.ajax({
                        url: "https://estore.getfundedafrica.com/wp-json/wc/v3/coupons/"+coupon_id+"?consumer_key=ck_c8f213701a6deda717f336a7685048ccfe07e4ba&consumer_secret=cs_63ec4d100f3c089022615326120d06e1d49498b0",
                        method: "POST",
                        data: JSON.stringify({}),
                        processData: false,
                        dataType: "json",
                        contentType: "application/json",
                        cache: false,
                        beforeSend: function(){
                        },
                        success: function(result){
                            var form_data = new FormData();
                            form_data.append("email", email);
                            form_data.append("credit", credit);

                            $.ajax({
                                url: "https://testnet.getfundedafrica.com/portal/gfa/creditRedeemConfirmation",
                                method: "POST",
                                data: form_data,
                                processData: false,
                                contentType: false,
                                cache: false,
                                beforeSend: function(){
                                },
                                success: function(result){
                                    $("#credit_message").html(credit_redeem_message);
                                    $(".displayRedeem").html('Reedemed');
                                    $('#redeem_btn').prop("disabled", true);
                                }
                            });
                        }
                    });
                    
                }
            });
        }
    });
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

function saveSSOAction(user_action, url){
    let email = document.getElementById('action_email').value;

    // var form_data = new FormData();
    // form_data.append("user_action", user_action);
    // form_data.append("email", email);
    
    // $.ajax({
    //     url: "https://fgnalat.getfundedafrica.com/portal/gfa/saveUserActivity",
    //     method: "POST",
    //     data: form_data,
    //     processData: false,
    //     contentType: false,
    //     cache: false,
    //     beforeSend: function(){
    //     },
    //     success: function(result){
    //         window.open(url, '_blank');
    //     }
    // });

    window.open(url, '_blank');

}

function loadInvestOnb(step){

    let email = document.getElementById('action_email').value;

    var form_data = new FormData();
    form_data.append("step", step);
    form_data.append("email", email);
    
    $.ajax({
        url: "https://testnet.getfundedafrica.com/portal/gfa/investOnbSteps",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            document.getElementById('invest-con-onb').style.display = 'none';
            document.getElementById('invest-con-preload').style.display = 'block';
        },
        success: function(result){
            document.getElementById('invest-con-onb').innerHTML = result;
            document.getElementById('invest-con-onb').style.display = 'block';
            document.getElementById('invest-con-preload').style.display = 'none';
        }
    });
}

function saveInvConOnb() {

    let email = document.getElementById('action_email').value;

    var form_data = new FormData();
    form_data.append("OnbStatus", 'completed');
    form_data.append("email", email);
    
    $.ajax({
        url: "https://testnet.getfundedafrica.com/portal/gfa/saveInvConOnb",
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            console.log('testing');
        },
        success: function(result){
            console.log(result);
            window.location.href = "https://testnet.getfundedafrica.com/portal/gfa/profile";
        }
    });
}

function getBaseUrl() {
    var re = new RegExp(/^.*\//);

    // return re.exec(window.location.href)[0];
    return location.protocol + '//' + location.host;
}

var inter;
var message_check = '';
function get_message(data) {
    console.log(data);
    document.getElementById('receiver').value = data;
    clearInterval(inter);
    
    var message_status = document.getElementById('message_status').value;
    inter = setInterval(function () {
        if(message_status = 'done'){
            get_realtime_message(data);
        } else {
            get_message(data)
        }
    }, 100);
    
}

// function get_message(data) {
//     document.getElementById('receiver').value = data;

//     function checkMessageStatus() {
//         var message_status = document.getElementById('message_status').value;

//         if (message_status === 'done') {
//             get_realtime_message(data);
//         } else {
//             setTimeout(checkMessageStatus, 100);
//         }
//     }

//     checkMessageStatus();
// }



function get_realtime_message(data) {
    document.getElementById('message_status').value = 'pending';
    var form_data = new FormData();
    form_data.append("data", data);
    $.post(root_url+'chat/getMessage', { data: data}, function (data) {
        document.getElementById('message_status').value = 'done';
        console.log('realtime <br>'+ message_check);
        
        if(message_check == '' || data !== message_check){
            document.getElementById('chats').innerHTML = data;
            $(".user-chats").scrollTop($(".user-chats > .chats").height());
            message_check = data;
        }
                    
        // console.log(data);
    });
    
    // $.ajax({
    //     url: root_url+"getmessage",
    //     method: "POST",
    //     data: form_data,
    //     processData: false,
    //     contentType: false,
    //     cache: false,
    //     beforeSend: function(){
    //         // document.getElementById('status-btn').style.display = 'none';
    //         // document.getElementById('status-btn-load').style.display = 'block';
    //     },
    //     success: function(result){
    //         document.getElementById('chats').innerHTML = result;
    //         setInterval(function() { 
    //             get_message(data);
    //             // console.log('timer works');
    //         }, 10000);
    //         // console.log(result);
    //         // document.getElementById('status-pend').style.display = 'none';
    //         // document.getElementById('status-final').style.display = 'block';
    //         // document.getElementById('set-status').innerHTML = status;

    //         // document.getElementById('status-btn').style.display = 'block';
    //         // document.getElementById('status-btn-load').style.display = 'none';
            
    //     }
    // });
}
 


//document.getElementsByClassName("select2-search__field")[0].addEventListener("keydown", get_users);