// var notificationsWrapper = $('.dropdown-notifications');
// var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
// var notificationsCountElem = notificationsToggle.find('span[data-count]');
// var notificationsCount = parseInt(notificationsCountElem.data('count'));
// var notifications = notificationsWrapper.find('div.dropdown-menu');

// // Subscribe to the channel we specified in our Laravel Event
// var channel = pusher.subscribe('new_email');
// // Bind a function to a Event (the full Laravel class)
// channel.bind('App\\Events\\EmailNotification', function (data) {
//     var existingNotifications = notifications.html();
//     var newNotificationHtml =
//     `<a href="" class="dropdown-item notify-item active">
//         <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
//         <p class="notify-details">
//             <b></b>
//             <span class="text-muted">`+data.sms+`</span>
//         </p>
//     </a>`;
//     notifications.html(newNotificationHtml + existingNotifications);
//     notificationsCount += 1;
//     notificationsCountElem.attr('data-count', notificationsCount);
//     notificationsWrapper.find('.notif-count').text(notificationsCount);
//     notificationsWrapper.show();
// });


// var notificationsWrapper = $('.dropdown-notifications');
// var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
// var notificationsCountElem = notificationsToggle.find('span[data-count]');
// var notificationsCount = parseInt(notificationsCountElem.data('count'));
// var notifications = notificationsWrapper.find('.scrollable-container');

// // Subscribe to the channel we specified in our Laravel Event
// var channel = pusher.subscribe('new_email');
// // Bind a function to a Event (the full Laravel class)
// channel.bind('App\\Events\\EmailNotification', function (data) {
//     var existingNotifications = notifications.html();
//     var newNotificationHtml = `<a href="`+data.user_id+`"><div class="media-body"><h6 class="media-heading text-right">` + data.user_id + `</h6> <p class="notification-text font-small-3 text-muted text-right">` + data.sms + `</p><small style="direction: ltr;"><p class="media-meta text-muted text-right" style="direction: ltr;">` + data.date + data.time + `</p> </small></div></div></a>`;
//     notifications.html(newNotificationHtml + existingNotifications);
//     notificationsCount += 1;
//     notificationsCountElem.attr('data-count', notificationsCount);
//     notificationsWrapper.find('.notif-count').text(notificationsCount);
//     notificationsWrapper.show();
// });


var notificationsWrapper   = $('.dropdown-notifications');
var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount     = parseInt(notificationsCountElem.data('count'));
var notifications          = notificationsWrapper.find('.scrollable-container');

if (notificationsCount <= 0) {
  notificationsWrapper.hide();
}

// Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

// var pusher = new Pusher('bb82e65c18afc6a8c12f', {
//     cluster: 'mt1',
//   encrypted: true
// });

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new_email');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\EmailNotification', function(data) {
  var existingNotifications = notifications.html();
  var newNotificationHtml =
    `<a href="" class="dropdown-item notify-item active">
        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
        <p class="notify-details">
            <b>`+data.sms+`</b>
            <span class="text-muted">`+data.sms+`</span>
        </p>
    </a>`;
  notifications.html(newNotificationHtml + existingNotifications);
  notificationsCount += 1;
  notificationsCountElem.attr('data-count', notificationsCount);
  notificationsWrapper.find('.notif-count').text(notificationsCount);
  notificationsWrapper.show();

});
