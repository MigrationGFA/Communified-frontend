//feather.replace({ width: 14, height: 14 });
// function BtnTest(){
//     console.log('test');
// }



let main_url = window.location.href.split('?')[0];
let root_path = main_url+"";
let root_api_url = main_url+"api/v0/php/";

const myForma = (value) => {
    

    if(value == "gfa1"){

        var form_data = new FormData();
        form_data.append("organisation_type", value);

        $.ajax({
            url: root_path+'api/v0/php/organisations.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form1_preload').show();
                $('#form1_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form1_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(result);
                }
                $('#form1_preload').hide();
                $('#form1_base').show();
                document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
            }
        });

        
    
    }
    if(value == "gfa2"){

        var form_data = new FormData();
        form_data.append("organisation_type", value);

        $.ajax({
            url: root_path+'api/v0/php/organisations.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form1_preload').show();
                $('#form1_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form1_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                }
                else{
                    alert(data_x['message']);
                }
                $('#form1_preload').hide();
                $('#form1_base').show();
                document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    
    }
    if(value == "gfa3"){

        var form_data = new FormData();
        form_data.append("organisation_type", value);

        $.ajax({
            url: root_path+'api/v0/php/organisations.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form1_preload').show();
                $('#form1_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form1_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form1_preload').hide();
                $('#form1_base').show();
                document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    
    }
    if(value == "gfa4"){

            var form_data = new FormData();
            form_data.append("organisation_type", value);

            $.ajax({
                url: root_path+'api/v0/php/organisations.php',
                method: 'POST',
                data: form_data,
                processData: false,
                cache: false,
                contentType: false,
                beforeSend: function(){
                    $('#form1_preload').show();
                    $('#form1_base').hide();
                },
                success: function(result){
                    var data_x = result.split('<||::>');
                    if (data_x[0] == '200'){
                        document.getElementById('form1_base').innerHTML = data_x[1];
                        // if (feather) {
                        //     feather.replace({ width: 14, height: 14 });
                        // }
                        
                    }
                    else{
                        alert(data_x['message']);
                    }
                    $('#form1_preload').hide();
                    $('#form1_base').show();
                    document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
                }
            });
        
    }
    if(value == "gfa5"){

            var form_data = new FormData();
            form_data.append("organisation_type", value);

            $.ajax({
                url: root_path+'api/v0/php/organisations.php',
                method: 'POST',
                data: form_data,
                processData: false,
                cache: false,
                contentType: false,
                beforeSend: function(){
                    $('#form1_preload').show();
                    $('#form1_base').hide();
                },
                success: function(result){
                    var data_x = result.split('<||::>');
                    if (data_x[0] == '200'){
                        document.getElementById('form1_base').innerHTML = data_x[1];
                        // if (feather) {
                        //     feather.replace({ width: 14, height: 14 });
                        // }
                    }
                    else{
                        alert(data_x['message']);
                    }
                    $('#form1_preload').hide();
                    $('#form1_base').show();
                    document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
                }
            }); 

    }
    if(value == "gfa6"){
    
        var form_data = new FormData();
        form_data.append("organisation_type", value);

        $.ajax({
            url: root_path+'api/v0/php/organisations.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form1_preload').show();
                $('#form1_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form1_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form1_preload').hide();
                $('#form1_base').show();
                document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }

     if(value == "gfa7"){
    
        var form_data = new FormData();
        form_data.append("financial_type", value);

        $.ajax({
            url: root_path+'api/v0/php/financial-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form1_preload').show();
                $('#form1_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form1_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form1_preload').hide();
                $('#form1_base').show();
                document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }

    $('#form2_base').hide();
    $('#form3_base').hide();
    $('#form4_base').hide();

    // /document.getElementById('form1_base').scrollIntoView({ behavior: "smooth" });
}
//===============ADDITIONAL JAVASCRIPT LAYER FOR ============================

//=================== U layer ====================================

const myFormbu = (value) => {
    

    if(value == "gfa1au"){

        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    
    }
    if(value == "gfa1bu"){
    
        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    
    }
    if(value == "gfa1cu"){
    
        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });

    }
    if(value == "gfa1du"){
    
        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });

    }
    if(value == "gfa1eu"){
    
        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });

    }

    if(value == "gfa1fu"){
    
        var form_data = new FormData();
        form_data.append("individual_type", value);

        $.ajax({
            url: root_path+'api/v0/php/individuals.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });

    }

    //document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
    $('#form3_base').hide();
    $('#form4_base').hide();

}


//=================== U END HERE ==============================================

//=================== W layer ====================================

const myFormcw = (value) => {
    
      
    if(value == "gfa2aw"){

        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }
    if(value == "gfa2bw"){

        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });

    }
    if(value == "gfa2cw"){
        
        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }
    if(value == "gfa2dw"){
        
        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }
    if(value == "gfa2ew"){
        
        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }  
    if(value == "gfa2fw"){
        
        var form_data = new FormData();
        form_data.append("startup_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startups.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
    }

    $('#form3_base').hide();
    $('#form4_base').hide();

    //document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
}


//=================== W END HERE ==============================================

//=================== X layer ====================================

const myFormdx = (value) => {


if(value == "gfa3ax"){

    
    var form_data = new FormData();
    form_data.append("investor_type", value);

    $.ajax({
        url: root_path+'api/v0/php/investors.php',
        method: 'POST',
        data: form_data,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(){
            $('#form2_preload').show();
            $('#form2_base').hide();
        },
        success: function(result){
            var data_x = result.split('<||::>');
            if (data_x[0] == '200'){
                document.getElementById('form2_base').innerHTML = data_x[1];
                $(".how-to-inv-1").val("Individual");
                // if (feather) {
                //     feather.replace({ width: 14, height: 14 });
                // }
                
            }
            else{
                alert(data_x['message']);
            }
            $('#form2_preload').hide();
            $('#form2_base').show();
            document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
        }
    }); 


}
if(value == "gfa3bx"){

    
    var form_data = new FormData();
    form_data.append("investor_type", value);

    $.ajax({
        url: root_path+'api/v0/php/investors.php',
        method: 'POST',
        data: form_data,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(){
            $('#form2_preload').show();
            $('#form2_base').hide();
        },
        success: function(result){
            var data_x = result.split('<||::>');
            if (data_x[0] == '200'){
                document.getElementById('form2_base').innerHTML = data_x[1];
                $(".how-to-inv-1").val("Venture Capital");
                // if (feather) {
                //     feather.replace({ width: 14, height: 14 });
                // }
                
            }
            else{
                alert(data_x['message']);
            }
            $('#form2_preload').hide();
            $('#form2_base').show();
            document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
        }
    }); 


}
if(value == "gfa3cx"){

    
    var form_data = new FormData();
    form_data.append("investor_type", value);

    $.ajax({
        url: root_path+'api/v0/php/investors.php',
        method: 'POST',
        data: form_data,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(){
            $('#form2_preload').show();
            $('#form2_base').hide();
        },
        success: function(result){
            var data_x = result.split('<||::>');
            if (data_x[0] == '200'){
                document.getElementById('form2_base').innerHTML = data_x[1];
                $(".how-to-inv-1").val("Group");
                // if (feather) {
                //     feather.replace({ width: 14, height: 14 });
                // }
            }
            else{
                alert(data_x['message']);
            }
            $('#form2_preload').hide();
            $('#form2_base').show();
            document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
        }
    }); 

}
if(value == "gfa3dx"){

    
    var form_data = new FormData();
    form_data.append("investor_type", value);

    $.ajax({
        url: root_path+'api/v0/php/investors.php',
        method: 'POST',
        data: form_data,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(){
            $('#form2_preload').show();
            $('#form2_base').hide();
        },
        success: function(result){
            var data_x = result.split('<||::>');
            if (data_x[0] == '200'){
                document.getElementById('form2_base').innerHTML = data_x[1];
                $(".how-to-inv-1").val("Government");
                // if (feather) {
                //     feather.replace({ width: 14, height: 14 });
                // }
                
            }
            else{
                alert(data_x['message']);
            }
            $('#form2_preload').hide();
            $('#form2_base').show();
            document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
        }
    }); 

}
if(value == "gfa3ex"){

    
    var form_data = new FormData();
    form_data.append("investor_type", value);

    $.ajax({
        url: root_path+'api/v0/php/investors.php',
        method: 'POST',
        data: form_data,
        processData: false,
        cache: false,
        contentType: false,
        beforeSend: function(){
            $('#form2_preload').show();
            $('#form2_base').hide();
        },
        success: function(result){
            var data_x = result.split('<||::>');
            if (data_x[0] == '200'){
                document.getElementById('form2_base').innerHTML = data_x[1];
                $(".how-to-inv-1").val("Others");
                // if (feather) {
                //     feather.replace({ width: 14, height: 14 });
                // }
            }
            else{
                alert(data_x['message']);
            }
            $('#form2_preload').hide();
            $('#form2_base').show();
            document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
        }
    }); 

}

if(value == "gfa3ex6"){

}

$('#form3_base').hide();
$('#form4_base').hide();

//document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });

}


//=================== X END HERE ==============================================


//=================== Y layer ====================================


const myFormey = (value) => {
      
    if(value == "gfa4ay"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".acctype").val("Early to late stage");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa4by"){

        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".acctype").val("Early Stage");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa4cy"){

        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".acctype").val("Late Stage");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa4dy"){

        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".acctype").val("All Stages");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa4ey"){

        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".acctype").val("Specific Stage");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }

    $('#form3_base').hide();
    $('#form4_base').hide();

    //document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
}


//=================== Y END HERE ==============================================

//=================== Z layer ====================================

const myFormfz = (value) => {
    $('#form3_base').hide();
      
    if(value == "gfa5az"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".engage").val("As a sponsor of an Accelerator Program");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa5bz"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".engage").val("As an investor in startups");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa5cz"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".engage").val("Solutions on efficiency and cost savings");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa5dz"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".engage").val("Customized Partnerships");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa5ez"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".engage").val("Others");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }

    $('#form3_base').hide();
    $('#form4_base').hide();
}
   
   
   
   
   
   
   
   //=================== Z layer ====================================

const myFormgz = (value) => {

    if(value == "gfa6az"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Discovery");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa6bz"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Ideas");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa6cz"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Development");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa6dz"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Pre-Launch");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa6ez"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Post-Launch");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }

    if(value == "gfa6ezz"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form2_preload').show();
                $('#form2_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form2_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    $(".current-stage").val("Growth");
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form2_preload').hide();
                $('#form2_base').show();
                document.getElementById('form2_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }

    $('#form3_base').hide();
    $('#form4_base').hide();
}



//=================== Z END HERE ==============================================

//================== END HERE ===============================================


const myFormb2 = (value) => {
       document.getElementById('form_all').scrollIntoView({ behavior: "smooth" });

      if(value == "gfa1a2"){

        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
     if(value == "gfa1b2"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
     if(value == "gfa1c2"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
   }
    if(value == "gfa1d2"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
       if(value == "gfa1e2"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
      
    if(value == "gfa1f2"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-discovery.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
      $('#form4_base').hide();
}
   
   

const myFormc2 = (value) => {

      if(value == "gfa1a3"){

        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
     if(value == "gfa1b3"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
     if(value == "gfa1c3"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
   }
    if(value == "gfa1d3"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
    if(value == "gfa1e3"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
      
    if(value == "gfa1f3"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-idea.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    $('#form4_base').hide();
}
   
   
   

const myFormd2 = (value) => {

      if(value == "gfa1a4"){

        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
        
      }
     if(value == "gfa1b4"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
     if(value == "gfa1c4"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
   }
    if(value == "gfa1d4"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
    if(value == "gfa1e4"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
      
    if(value == "gfa1f4"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-development.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    $('#form4_base').hide();
}
   
   
   
const myForme2 = (value) => {

      if(value == "gfa1a5"){

        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
     if(value == "gfa1b5"){
    
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
     if(value == "gfa1c5"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
   }
    if(value == "gfa1d5"){
      
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });

      }
    if(value == "gfa1e5"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
      
    if(value == "gfa1f5"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-pre-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    $('#form4_base').hide();
}





const myFormf2 = (value) => {

      if(value == "gfa1a6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
     if(value == "gfa1b6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
     if(value == "gfa1c6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
   }
    if(value == "gfa1d6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
      }
    if(value == "gfa1e6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
      
    if(value == "gfa1f6"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-post-launch.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    $('#form4_base').hide();
}



const myFormg2 = (value) => {

    if(value == "gfa1a7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    if(value == "gfa1b7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    if(value == "gfa1c7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    if(value == "gfa1d7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    if(value == "gfa1e7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }

    if(value == "gfa1f7"){
        var form_data = new FormData();
        form_data.append("discovery_type", value);

        $.ajax({
            url: root_path+'api/v0/php/startup-growth.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        });
    }
    $('#form4_base').hide();
}



const myFormbinv = (value) => {

    if(value == "gfa1ainv"){

        
        var form_data = new FormData();
        form_data.append("investor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/investors-final.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    let how_to_inv = $(".how-to-inv-1").val();
                    $(".how-to-inv").val(how_to_inv);
                    $(".amount-inv").val("0-1000");
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    if(value == "gfa1binv"){

        
        var form_data = new FormData();
        form_data.append("investor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/investors-final.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    let how_to_inv = $(".how-to-inv-1").val();
                    $(".how-to-inv").val(how_to_inv);
                    $(".amount-inv").val("1000-20000");
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa1cinv"){

        
        var form_data = new FormData();
        form_data.append("investor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/investors-final.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    let how_to_inv = $(".how-to-inv-1").val();
                    $(".how-to-inv").val(how_to_inv);
                    $(".amount-inv").val("20000-100000");
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa1dinv"){

        
        var form_data = new FormData();
        form_data.append("investor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/investors-final.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    let how_to_inv = $(".how-to-inv-1").val();
                    $(".how-to-inv").val(how_to_inv);
                    $(".amount-inv").val("100000-500000");
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa1einv" || value == "gfa1finv" || value == "gfa1ginv" || value == "gfa1hinv" || value == "gfa1iinv"){

        
        var form_data = new FormData();
        form_data.append("investor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/investors-final.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    let how_to_inv = $(".how-to-inv-1").val();
                    $(".how-to-inv").val(how_to_inv);
                    $(".amount-inv").val("500000-1000000000");
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 

    }
    $('#form4_base').hide();
}

const myFormbacc = (value) => {

      if(value == "gfa1aacc"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let acc_type = $(".acctype").val();
                    $(".type-acc").val(acc_type);
                    $(".no-acc").val("1-4");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
     if(value == "gfa1bacc"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let acc_type = $(".acctype").val();
                    $(".type-acc").val(acc_type);
                    $(".no-acc").val("5-8");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
     if(value == "gfa1cacc"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let acc_type = $(".acctype").val();
                    $(".type-acc").val(acc_type);
                    $(".no-acc").val("9-12");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
   }
    if(value == "gfa1dacc"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let acc_type = $(".acctype").val();
                    $(".type-acc").val(acc_type);
                    $(".no-acc").val("12-15");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    if(value == "gfa1eacc"){
        var form_data = new FormData();
        form_data.append("incubator_type", value);

        $.ajax({
            url: root_path+'api/v0/php/incubators-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let acc_type = $(".acctype").val();
                    $(".type-acc").val(acc_type);
                    $(".no-acc").val("15-above");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
    }
    $('#form4_base').hide();

}



const myFormbgov = (value) => {

      if(value == "gfa1agov"){
            var form_data = new FormData();
            form_data.append("government_type", value);
    
            $.ajax({
                url: root_path+'api/v0/php/governments-form.php',
                method: 'POST',
                data: form_data,
                processData: false,
                cache: false,
                contentType: false,
                beforeSend: function(){
                    $('#form3_preload').show();
                    $('#form3_base').hide();
                },
                success: function(result){
                    var data_x = result.split('<||::>');
                    if (data_x[0] == '200'){
                        document.getElementById('form3_base').innerHTML = data_x[1];
                        // if (feather) {
                        //     feather.replace({ width: 14, height: 14 });
                        // }
                        let engage = $(".engage").val();
                        $(".engagement").val(engage);
                        $(".org-interest").val("Early to late stage");
                        
                        
                    }
                    else{
                        alert(data_x['message']);
                    }
                    $('#form3_preload').hide();
                    $('#form3_base').show();
                    document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
                }
            }); 
      }
     if(value == "gfa1bgov"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let engage = $(".engage").val();
                        $(".engagement").val(engage);
                        $(".org-interest").val("Early Stage");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
     if(value == "gfa1cgov"){
        var form_data = new FormData();
            form_data.append("government_type", value);
    
            $.ajax({
                url: root_path+'api/v0/php/governments-form.php',
                method: 'POST',
                data: form_data,
                processData: false,
                cache: false,
                contentType: false,
                beforeSend: function(){
                    $('#form3_preload').show();
                    $('#form3_base').hide();
                },
                success: function(result){
                    var data_x = result.split('<||::>');
                    if (data_x[0] == '200'){
                        document.getElementById('form3_base').innerHTML = data_x[1];
                        // if (feather) {
                        //     feather.replace({ width: 14, height: 14 });
                        // }
                        let engage = $(".engage").val();
                        $(".engagement").val(engage);
                        $(".org-interest").val("Late Stage");
                        
                        
                    }
                    else{
                        alert(data_x['message']);
                    }
                    $('#form3_preload').hide();
                    $('#form3_base').show();
                    document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
                }
            }); 
   }
    if(value == "gfa1dgov"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let engage = $(".engage").val();
                    $(".engagement").val(engage);
                    $(".org-interest").val("All Stages");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
       if(value == "gfa1egov"){
        var form_data = new FormData();
        form_data.append("government_type", value);

        $.ajax({
            url: root_path+'api/v0/php/governments-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let engage = $(".engage").val();
                    $(".engagement").val(engage);
                    $(".org-interest").val("Specific Stage");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }

      $('#form4_base').hide();
}
 
 
 

const myFormbgov6 = (value) => {
       document.getElementById('form_all').scrollIntoView({ behavior: "smooth" });

      if(value == "gfa1agov6"){

        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let cur_stage = $(".current-stage").val();
                    $(".gfa1aigov6-current-stage").val(cur_stage);
                    $(".gfa1aigov6-interest").val("Every Week");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      
      }
     if(value == "gfa1bgov6"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let cur_stage = $(".current-stage").val();
                    $(".gfa1aigov6-current-stage").val(cur_stage);
                    $(".gfa1aigov6-interest").val("Every 2 Week");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
     if(value == "gfa1cgov6"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let cur_stage = $(".current-stage").val();
                    $(".gfa1aigov6-current-stage").val(cur_stage);
                    $(".gfa1aigov6-interest").val("Every Month");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
   }
    if(value == "gfa1dgov6"){
        var form_data = new FormData();
        form_data.append("mentor_type", value);

        $.ajax({
            url: root_path+'api/v0/php/mentorships-form.php',
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function(){
                $('#form3_preload').show();
                $('#form3_base').hide();
            },
            success: function(result){
                var data_x = result.split('<||::>');
                if (data_x[0] == '200'){
                    document.getElementById('form3_base').innerHTML = data_x[1];
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                    let cur_stage = $(".current-stage").val();
                    $(".gfa1aigov6-current-stage").val(cur_stage);
                    $(".gfa1aigov6-interest").val("Every Quarter");
                    
                    
                }
                else{
                    alert(data_x['message']);
                }
                $('#form3_preload').hide();
                $('#form3_base').show();
                document.getElementById('form3_base').scrollIntoView({ behavior: "smooth" });
            }
        }); 
      }
}

const gfa_subscribe = (classname) => {

    var newsletter = $("."+classname+"-subscribe").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").val(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
        },
    });
    
}

const gfa_reg_news = (classname) => {
    //---------------^---------------

    var newsletter = $("."+classname+"-subscribe").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingRegNews.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
        },
    });
}

const gfa_funding = (classname) => {

    
            var form = $("."+classname+"-funding")[0];
        var formData = new FormData(form);
    $.ajax({
        data: formData,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-funding")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-funding .select2").val(null).trigger("change");

        },
    });
    
}

const gfa_report = (classname) => {
    //---------------^---------------
    var form = $("." + classname + "-report")[0];
         
    var newsletter = $("."+classname+"-report").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-report")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-report .select2").val(null).trigger("change");
        },
    });
}

const gfa_learning = (classname) => {
    //---------------^---------------
    var form = $("." + classname + "-learning")[0];
    var newsletter = $("."+classname+"-learning").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
             // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-learning")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-learning .select2").val(null).trigger("change");
        },
    });
}

const gfa_streaming = (classname) => {
    //---------------^---------------

    var newsletter = $("."+classname+"-streaming").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
        },
    });
}

const checkEmail = (classname, id) => {
    var email = $("."+classname+"-checkEmail").val();
        $.ajax({
            data: {
                email: email,
                id: id
            },
            type: "POST",
            url: root_api_url+"checkAllReg.php",
            error: function() {
                $("."+classname+"-showData").html(
                    "Error showing data");
            },
            beforeSend: function() {
                $("."+classname+"-showData").html(
                    "Checking Previous Data..."
                );
            },
            success: function(data) {
                $("."+classname+"-showData").html(data);
            },
        });
}

const checkEmail_noId = (classname) => {
    var email = $("."+classname+"-checkEmail").val();
        $.ajax({
            data: {
                email: email,
            },
            type: "POST",
            url: root_api_url+"checkemail.php",
            error: function() {
                $("."+classname+"-showData").html(
                    "Error showing data");
            },
            beforeSend: function() {
                $("."+classname+"-showData").html(
                    "Checking Previous Data..."
                );
            },
            success: function(data) {
                $("."+classname+"-showData").html(data);
            },
        });
}

const gfa_form = (classname) => {
    //---------------^---------------

    //var newsletter = $("."+classname+"-funding").serialize();
            var form = $("."+classname+"-form")[0];
        var formData = new FormData(form);
    $.ajax({
        data: formData,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-form")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-form .select2").val(null).trigger("change");
       
        },
    });
}

const gfa_prelaunch = (classname) => {
    //---------------^---------------

    //var newsletter = $("."+classname+"-funding").serialize();
            var form = $("."+classname+"-prelaunch")[0];
        var formData = new FormData(form);
    $.ajax({
        data: formData,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-prelaunch")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-prelaunch .select2").val(null).trigger("change");
       
        },
    });
}


const gfa_venture = (classname) => {

    //var newsletter = $("."+classname+"-funding").serialize();
            var form = $("."+classname+"-funding")[0];
        var formData = new FormData(form);
    $.ajax({
        data: formData,
        type: "POST",
        url: root_api_url+"onboardingRegGrowth.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
        },
    });
}

const gfa_venture_pro = (classname) => {

   //var newsletter = $("."+classname+"-funding").serialize();
            var form = $("."+classname+"-venture")[0];
        var formData = new FormData(form);
    $.ajax({
        data: formData,
        type: "POST",
        url: root_api_url+"onboardingpro.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         $("." + classname + "-venture")[0].reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $("." + classname + "-venture .select2").val(null).trigger("change");
       
        },
    });
}

const gfa_reg_mentor = (classname) => {
    
    var form = $("." + classname + "-funding")[0];
    var funding = $("."+classname+"-funding").serialize();
    $.ajax({
        data: funding,
        type: "POST",
        url: root_api_url+"onboardingRegMentor.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled",
                true
            );

            // Clear all form fields (inputs, selects, and textareas)
            $("." + classname + "-funding")[0].reset();

            // Optional: Reset custom selects (e.g., select2 or other plugins)
            $("." + classname + "-funding .select2").val(null).trigger("change");
        },
    });
}

const checkEmail_acc = () => {
    var email = $(".checkEmailAcc").val();
    $.ajax({
        data: {
            email: email
        },
        type: "POST",
        url: root_api_url+"checkEmailAcc.php",
        error: function() {
            $(".showDataAcc").html(
                "Error saving data");
        },
        beforeSend: function() {
            $(".showDataAcc").html(
                "Checking Previous Data..."
            );
        },
        success: function(data) {
            if (data == 1) {
                $(".showDataAcc").html(
                    "You have already registered on this platform. Kindly login to your account."
                );
                $(".accBtn").prop("disabled", true);
            } else {
                $(".showDataAcc").html("");
                $(".accBtn").prop("disabled",
                false);
            }
        },
    });
}

const accelerator_form = () => {
     var form = $(".accelerator")[0]; // Get the form element
    var newsletter = $(".accelerator").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingAccPro.php",
        error: function() {
            $(".accBtn").html("Error saving data");
        },
        beforeSend: function() {
            $(".accBtn").html("Submiting Form...");
        },
        success: function(data) {
            $(".accBtn").html(
                "Succès ✔ veuillez consulter votre messagerie email pour continuer"
            );
            $(".accBtn").prop("disabled", true);

            // Clear all form fields (inputs, selects, and textareas)
         form.reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $(".accelerator .select2").val(null).trigger("change");

        },
    });
}


const checkEmail_org = () => {
var email = $(".checkEmailAcc").val();
    $.ajax({
        data: {
            email: email
        },
        type: "POST",
        url: root_api_url+"checkEmailOrg.php",
        error: function() {
            $(".showDataOrg").html(
                "Error checking data");
        },
        beforeSend: function() {
            $(".showDataOrg").html(
                "Checking Previous Data..."
            );
        },
        success: function(data) {
            if (data == 1) {
                $(".showDataOrg").html(
                    "You have already registered on this platform. Kindly login to your account."
                );
                $(".orgBtn").prop("disabled", true);
            } else {
                $(".showDataOrg").html("");
                $(".orgBtn").prop("disabled",
                false);
            }
        },
    });
}

const financial = () => {
    //---------------^---------------
     var form = $(".financial")[0]; // Get the form element
         

    var newsletter = $(".financial").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingFinPro.php",
        error: function() {
            $(".orgBtn").html("Error saving data");
        },
        beforeSend: function() {
            $(".orgBtn").html("Submiting Form...");
        },
        success: function(data) {
            $(".orgBtn").html(
                "Succès ✔ veuillez consulter votre messagerie email pour continuer"
            );
            $(".orgBtn").prop("disabled", true);
            // Clear all form fields (inputs, selects, and textareas)
         form.reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $(".organisation .select2").val(null).trigger("change");
        },
    });
}
const organisation = () => {
    //---------------^---------------
    var newsletter = $(".organisation").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingOrgPro.php",
        error: function() {
            $(".orgBtn").html("Error saving data");
        },
        beforeSend: function() {
            $(".orgBtn").html("Submiting Form...");
        },
        success: function(data) {
            $(".orgBtn").html(
                "Succès ✔ veuillez consulter votre messagerie email pour continuer"
            );
            $(".orgBtn").prop("disabled", true);

            // Clear all form fields (inputs, selects, and textareas)
            form.reset();

            // Optional: Reset custom selects (e.g., select2 or other plugins)
            $(".organisation .select2").val(null).trigger("change");
        },
    });
}

const startup_report = (classname) => {

    var newsletter = $("."+classname+"-report").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingRegInsight.php",
        error: function() {
            $("."+classname+"-subscribeBtn").html(
                "Error saving data"
            );
        },
        beforeSend: function() {
            $("."+classname+"-subscribeBtn").html(
                "Submiting Form..."
            );
        },
        success: function(data) {
            $("."+classname+"-subscribeBtn").html(
                "Succès! Veuillez vérifier votre e-mail pour continuer"
            );
            $("."+classname+"-subscribeBtn").prop(
                "disabled", true);
        },
    });
}

const checkEmailInv = () => {
    var email = $(".checkEmailInv").val();
    $.ajax({
        data: {
            email: email
        },
        type: "POST",
        url: root_api_url+"checkemailInv.php",
        error: function() {
            $(".showDataInv").html(
                "Error showing data");
        },
        beforeSend: function() {
            $(".showDataInv").html(
                "Checking Previous Data..."
            );
        },
        success: function(data) {
            if (data == 1) {
                $(".showDataInv").html(
                    "You have already registered on this platform. Kindly login to your account."
                );
                $(".investorBtn").prop("disabled",
                    true);
            } else {
                $(".showDataInv").html("");
                $(".investorBtn").prop("disabled",
                    false);
            }
        },
    });
}

const investorForm = () => {

     var form = $(".investorForm")[0]; // Get the form element
    //---------------^---------------
    var newsletter = $(".investorForm").serialize();
    $.ajax({
        data: newsletter,
        type: "POST",
        url: root_api_url+"onboardingInvPro.php",
        error: function() {
            $(".investorBtn").html(
                "Error saving data");
        },
        beforeSend: function() {
            $(".investorBtn").html(
                "Submiting Form...");
        },
        success: function(data) {
            $(".investorBtn").html(
                "Succès ✔ veuillez consulter votre messagerie email pour continuer"
            );
            $(".investorBtn").prop("disabled",
                true);

            // Clear all form fields (inputs, selects, and textareas)
         form.reset();

         // Optional: Reset custom selects (e.g., select2 or other plugins)
         $(".investorForm .select2").val(null).trigger("change");
        },
    });
}

const others_industry = () => {
    var industry = document.getElementById('inv_industry').value;
    if(industry == 'Others'){
        document.getElementById('custom_industry').style.display = 'block';
    } else {
        document.getElementById('custom_industry').style.display = 'none';
    }
}


const feather1 = () => {
    feather.replace({ width: 14, height: 14 });
}