"use strict";


const o = document.querySelector(".app-chat-contacts .sidebar-body"),
    u = document.querySelector(".app-chat-sidebar-left .sidebar-body"),
    d = document.querySelector(".app-chat-sidebar-right .sidebar-body"),
    h = [].slice.call(document.querySelectorAll(".form-check-input[name='chat-user-status']")),
    m = $(".chat-sidebar-left-user-about"),
    p = document.querySelector(".form-send-message"),
    v = document.querySelector(".message-input"),
    b = document.querySelector(".chat-search-input"),
    f = $(".speech-to-text"),
    i = document.querySelector(".chat-history-body"),
    y = { active: "avatar-online", offline: "avatar-offline", away: "avatar-away", busy: "avatar-busy" },
    recentChatsTab = document.getElementById('recentChatsTab'),
    allContactsTab = document.getElementById('allContactsTab'),
    senderName = $("#SenderName").val(),
    senderAcct = $("#SenderAcct").val();
    
    function a() {
        i.scrollTo(0, i.scrollHeight);
    }



function markMessageAsRead(receiverEmail) {
    $.ajax({
        type: "POST",
        url: $("#getBaseUrl").val() + "chat/updateIsRead",
        data: { ReceiverEmail: receiverEmail },
        success: function(response) {
        },
        error: function(error) {
            // console.error("Error marking message as read:", error);
        }
    });
}

function changeChatContent(receiverEmail, receiverName, receiverAcct, idName) {    
    let allElements = document.querySelectorAll('.chat-contact-list-item');
        allElements.forEach(function(element) {
            element.classList.remove('active');
        });
        
    let activeElement = document.getElementById(idName + receiverEmail);
    if (!activeElement.classList.contains('active')) {
        activeElement.classList.add('active');
    }
    
    let currentReceiverName = document.getElementById("currentReceiverName");
    currentReceiverName.innerText = receiverName;
    
    let currentReceiverAcct = document.getElementById("currentReceiverAcct");
    currentReceiverAcct.innerText = receiverAcct;

    setTimeout(function() {
        getChatMessages(receiverEmail);
    	markMessageAsRead(receiverEmail);
    }, 500);
    
}

function getChatMessages(rEmail) {
    $.ajax({
        type: "POST",
        url: $("#getBaseUrl").val() + 'chat/fetchData',
        data: { receiverEmail: rEmail },
        success: function (data) {
            updateChatHistory(data);
        },
        error: function (error) {
            // console.error('Error fetching data:', error);
        }
    });
}
    
    
function updateChatHistory(data) {
    var chatHistory = document.querySelector('.chat-history');
    chatHistory.innerHTML = '';

    data.forEach(message => {
        var messageHtml = '';
        var messageContent = message.Message;
        
        if (messageContent.includes('http') || messageContent.includes('https')) {
            messageContent = `<a href="${messageContent}" target="_blank" style="${message.MessageOwner === 'receiver' ? 'color: white;' : ''}">${messageContent}</a>`;
        }

        if (message.MessageOwner === 'sender') {
            messageHtml = `<li class="chat-message" data-message-id="${message.id}">
                    <div class="d-flex overflow-hidden">
                        <div class="chat-message-wrapper flex-grow-1">
                            <div class="chat-message-text">
                                <p class="mb-0">${messageContent}</p>
                            </div>
                            <div class="text-muted mt-1">
                                <small>${message.TimeCreated}</small>
                            </div>
                        </div>
                    </div>
                </li>`;
        } else if (message.MessageOwner === 'receiver') {
            messageHtml = `<li class="chat-message chat-message-right" data-message-id="${message.id}">
                    <div class="d-flex overflow-hidden">
                        <div class="chat-message-wrapper flex-grow-1">
                            <div class="chat-message-text">
                                <p class="mb-0">${messageContent}</p>
                            </div>
                            <div class="text-end text-muted mt-1">
                                <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                <small>${message.TimeCreated}</small>
                            </div>
                        </div>
                    </div>
                </li>`;
        }
        chatHistory.innerHTML += messageHtml;
    });
    a();
}
 
// Check if the recentChatsTab is active initially
if (recentChatsTab.classList.contains('active')) {
    handleRecentChatsTab();
}

// Add event listeners for tab clicks
recentChatsTab.addEventListener('click', handleRecentChatsTab);
allContactsTab.addEventListener('click', handleAllContactsTab);

function getMostRecent(rEmail) {
    let res;
    $.ajax({
        type: "POST",
        url: $("#getBaseUrl").val() + "chat/fetchFirstChat",
        data: { ReceiverEmail: rEmail },
        async: false, // Making the request synchronous
        success: function(response2) {
            res = response2;
        },
        error: function(xhr, status, error) {
            // console.error(error);
        }
    });
    if (res) {
        return res;
    } else {
        return 'error';
    }
};

function handleRecentChatsTab() {
    $.ajax({
        type: "GET",
        url: $("#getBaseUrl").val() + "chat/fetchRecentChats",
        success: function(response) {
            let html = '';
            let res2;
            if (response.length > 0) {
                response.forEach(chatContact => {
                    res2 = getMostRecent(chatContact.ReceiverEmail);
                    html += `
                        <li class="chat-contact-list-item newItem" id="new_item_${chatContact.ReceiverEmail}" onclick="changeChatContent('${chatContact.ReceiverEmail}',  &quot;${chatContact.ReceiverName} &quot;, '', 'new_item_')">
                            <a class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar avatar-offline">
                                    <img src="/portal/public/assets-new/img/avatars/default-img.jpg" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="chat-contact-name text-truncate m-0 py-0">${chatContact.ReceiverName}</h6>
                                    
									<p class="chat-contact-status text-muted text-truncate my-0 py-0">${res2.Message}</p>	
                                </div>
                                <small class="text-muted mb-auto">${convertToMinutesOrSeconds(res2.TimeCreated)}</small>
                            </a>
                        </li>
                        <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4 d-none" id="addingNone">
                        	<h6 class="text-muted mb-0">No Chats Found</h6>
                    	</li>
                    `;
                });
                // Set the HTML content of chat-list element after all AJAX requests are complete
                document.getElementById('chat-list').innerHTML = html;

                // Automatically run the function for the first li element
                let firstListItem = document.querySelector('.chat-contact-list-item');
                if (firstListItem) {
                    let receiverEmail = firstListItem.id.replace('new_item_', '');
                    let receiverName = firstListItem.querySelector('.chat-contact-name').innerText;
                    changeChatContent(receiverEmail, receiverName, '', 'new_item_');
                }
            } else {
                // If no chats found, display a message
                html += `
                    <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4">
                        <h6 class="text-muted mb-0">No Chats Found</h6>
                    </li>`;
                // Set the HTML content of chat-list element when no chats are found
                document.getElementById('chat-list').innerHTML = html;
            }
        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
    });
}

function handleAllContactsTab() {
    $.ajax({
        type: "GET",
        url: $("#getBaseUrl").val() + "chat/fetchContacts",
        success: function (response) {
            let html = '';
            if (response.length > 0) {
                response.forEach(chatContact => {
                    html += `
                        <li class="chat-contact-list-item newItemb" id="new_itemb_${chatContact.ReceiverEmail}" onclick="changeChatContent('${chatContact.ReceiverEmail}',  &quot;${chatContact.ReceiverName} &quot;, &quot;${chatContact.ReceiverAcct} &quot;, 'new_itemb_')">
                            <a class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar avatar-offline">
                                    <img src="/portal/public/assets-new/img/avatars/default-img.jpg" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="chat-contact-name text-truncate m-0">${chatContact.ReceiverName}</h6>
    								<small class="user-status text-muted">${chatContact.ReceiverAcct}</small>
                                </div>
                            </a>
                        </li>
                        <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4 d-none" id="addingNone">
                        	<h6 class="text-muted mb-0">No Chats Found</h6>
                    	</li>
                    `;
                });
            } else {
                html += `
                    <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4" id="addingNone">
                        <h6 class="text-muted mb-0">No Chats Found</h6>
                    </li>`;
            }
            document.getElementById('contact-list').innerHTML = html;
        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
    });
}
 
function convertToMinutesOrSeconds(timestamp) {
    var timeDifference = Math.floor((new Date().getTime() / 1000) - (new Date(timestamp).getTime() / 1000));

    if (timeDifference < 60) {
        return timeDifference + (timeDifference === 1 ? ' second' : ' seconds');
    } else if (timeDifference < 3600) {
        var minutes = Math.floor(timeDifference / 60);
        return minutes + (minutes === 1 ? ' minute' : ' minutes');
    } else if (timeDifference < 86400) {
        var hours = Math.floor(timeDifference / 3600);
        return hours + (hours === 1 ? ' hour' : ' hours');
    } else if (timeDifference < 604800) {
        var days = Math.floor(timeDifference / 86400);
        return days + (days === 1 ? ' day' : ' days');
    } else if (timeDifference < 2419200) {
        var weeks = Math.floor(timeDifference / 604800);
        return weeks + (weeks === 1 ? ' week' : ' weeks');
    } else if (timeDifference < 29030400) {
        var months = Math.floor(timeDifference / 2419200);
        return months + (months === 1 ? ' month' : ' months');
    } else {
        var years = Math.floor(timeDifference / 29030400);
        return years + (years === 1 ? ' year' : ' years');
    }
}
    
function sendSearchRequest() {
let searchTerm = $('#searchInput').val().trim();
let lFDb = $('#loadFromDb');
if (searchTerm !== '') {
lFDb.text('Searching...');

$.ajax({
    type: "POST",
    url: $("#getBaseUrl").val() + "chat/search",
    data: { name: searchTerm },
    success: function(response) {
        lFDb.text('');
    	let html = '';
        if (response.length > 0) {            
            response.forEach(chatContact => {
                html += `
                    <li class="chat-contact-list-item newItemb" id="new_itemb_${chatContact.ReceiverEmail}" onclick="changeChatContent('${chatContact.ReceiverEmail}', '${chatContact.ReceiverName}', '', 'new_itemb_')">
                            <a class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar avatar-offline">
                                    <img src="/portal/public/assets-new/img/avatars/default-img.jpg" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="chat-contact-name text-truncate m-0">${chatContact.ReceiverName}</h6>
                                </div>
                            </a>
                        </li>
                        <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4 d-none" id="addingNone">
                        	<h6 class="text-muted mb-0">No Chats Found</h6>
                    	</li>
                    `;
            });
            document.getElementById('contact-list').innerHTML = html;
        } else {
                html += `
                    <li class="chat-contact-list-item-0 chat-list-item-0 ms-4 mt-4" id="addingNone">
                        <h6 class="text-muted mb-0">No Chats Found</h6>
                    </li>`;
            }
            document.getElementById('contact-list').innerHTML = html;
    },
    error: function(xhr, status, error) {
        // console.error(xhr.responseText);
    }
});
}
}

function addNone() {
    var addingNone = document.getElementById('addingNone');
    if (addingNone !== null && addingNone.classList.contains("d-none")) {
        addingNone.classList.remove("d-none");
    }
}

function l(e, a, c, t) {
    e.forEach((e) => {
        var t = e.textContent.toLowerCase();
        !c || -1 < t.indexOf(c) ? (e.classList.add("d-flex"), e.classList.remove("d-none"), a++) : e.classList.add("d-none");
    }),
    	0 == a ? t.classList.remove("d-none") : t.classList.add("d-none");
}

o && new PerfectScrollbar(o, { wheelPropagation: !1, suppressScrollX: !0 }),
    i && new PerfectScrollbar(i, { wheelPropagation: !1, suppressScrollX: !0 }),
    u && new PerfectScrollbar(u, { wheelPropagation: !1, suppressScrollX: !0 }),
    d && new PerfectScrollbar(d, { wheelPropagation: !1, suppressScrollX: !0 }),
    a(),
    m.length && m.maxlength({ alwaysShow: !0, warningClass: "label label-success bg-success text-white", limitReachedClass: "label label-danger", separator: "/", validate: !0, threshold: 120 }),
    h.forEach((e) => {
        e.addEventListener("click", (e) => {
            var t = document.querySelector(".chat-sidebar-left-user .avatar"),
                e = e.currentTarget.value,
                t = (t.removeAttribute("class"), Helpers._addClass("avatar avatar-xl " + y[e], t), document.querySelector(".app-chat-contacts .avatar"));
            t.removeAttribute("class"), Helpers._addClass("flex-shrink-0 avatar " + y[e] + " me-3", t);
        });
    }),
   
    b && 
    b.addEventListener("keyup", (e) => {
        if (e.keyCode === 13) {
            if (recentChatsTab.classList.contains('active')) {
                var e = e.currentTarget.value.toLowerCase(),
                    t = document.querySelector(".chat-list-item-0"),
                    a = document.querySelector(".contact-list-item-0"),
                    c = [].slice.call(document.querySelectorAll("#chat-list li:not(.chat-contact-list-item-title)")),
                    r = [].slice.call(document.querySelectorAll("#contact-list li:not(.chat-contact-list-item-title)"));
                l(c, 0, e, t), l(r, 0, e, a);
            } else {
                sendSearchRequest();
            }
        }
    }),
     
        p.addEventListener("submit", function (e) {
            e.preventDefault();
            let ReceiverEmail, ReceiverName;
            
            if (recentChatsTab.classList.contains('active')) {
                let activeChatContact = document.querySelector('.chat-contact-list-item.active');
                ReceiverEmail = activeChatContact.getAttribute('id').replace('new_item_', '');
                ReceiverName = activeChatContact.querySelector('.chat-contact-name').innerText;
                handleSubmitMessage(e, ReceiverEmail, ReceiverName, 'changeChatContent');
            } else if (allContactsTab.classList.contains('active')) {
                let activeChatContact = document.querySelector('.chat-contact-list-item.newItemb.active');
                ReceiverEmail = activeChatContact.getAttribute('id').replace('new_itemb_', '');
                ReceiverName = activeChatContact.querySelector('.chat-contact-name').innerText;
                handleSubmitMessage(e, ReceiverEmail, ReceiverName, 'changeChatContentb');
            }
        });

        function handleSubmitMessage(e, ReceiverEmail, ReceiverName, changeFunctionName) {
            e.preventDefault();
            let Message = v.value.trim();
            let formData = { ReceiverEmail: ReceiverEmail, Message: Message, SenderName: senderName, ReceiverName: ReceiverName};   
        if (Message !== "") {
                $.ajax({
                    type: "POST",
                    url: $("#getBaseUrl").val() + "chat/create",
                    data: formData,
                    success: function (response) {
                        if (response.status == 'success') {
                            if (changeFunctionName === 'changeChatContent') {
                                changeChatContent(ReceiverEmail, ReceiverName, '', 'new_item_');
                                handleRecentChatsTab();
                            } else if (changeFunctionName === 'changeChatContentb') {
                                changeChatContent(ReceiverEmail, ReceiverName, '', 'new_itemb_');
                            }
                        }
                    },
                    error: function (error) {
                        // console.error(error);
                    }
                });
        
                v.value = "";
                a();
            }
        }
