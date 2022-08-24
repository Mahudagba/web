importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js");

firebase.initializeApp({

    apiKey: "AIzaSyDdFhr2aRp3hUnIMbyuelbILZ_BoBjLIsg",
    authDomain: "oliini-b8953.firebaseapp.com",
    projectId: "oliini-b8953",
    storageBucket: "oliini-b8953.appspot.com",
    messagingSenderId: "739335327037",
    appId: "1:739335327037:web:34fa7d87d397d4b312c954",
    measurementId: "G-HQJVX30TYX"

});

const messaging = firebase.messaging();

// Optional:
messaging.onBackgroundMessage((message) => {
    console.log("onBackgroundMessage", message);
});