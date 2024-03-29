<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:200px;
            width:200px;
            border:2px black solid;
        }
    </style>
</head>
<body>
    <label for="">Image Name</label>
    <input type="text" name="name" id="name">  <label id="extlab" ></label><br><br>
    <img id="myimg"> <label id="uploadprogress" ></label><br><br>
    <button id="selbtn">Select Image</button>
    <button id="upbtn">Upload Image</button>
    <button id="dwnbtn">Retrieve Image</button>
        <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyCF_GbA73gLbWqDpz6zMWrO5uOwFhiu3Ro",
    authDomain: "naturelandhotel-ff493.firebaseapp.com",
    databaseURL: "https://naturelandhotel-ff493-default-rtdb.firebaseio.com",
    projectId: "naturelandhotel-ff493",
    storageBucket: "naturelandhotel-ff493.appspot.com",
    messagingSenderId: "808884251438",
    appId: "1:808884251438:web:df4a9651b5e0018550e8bf"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  import {getStorage, ref as sRef,uploadBytesResumable,getDownloadURL} from "https://www.gstatic.com/firebasejs/9.9.1/firebase-storage.js";
  var files = [];
  var reader = new FileReader();
  var name = document.getElementById("name");
  var extlab = document.getElementById("extlab");
  var myimg = document.getElementById("myimg");
  var uploadprogress = document.getElementById("uploadprogress");
  var selbtn = document.getElementById("selbtn");
  var upbtn = document.getElementById("upbtn");
  var dwnbtn = document.getElementById("dwnbtn");
  var input = document.createElement('input');
 
  input.type = 'file';
  input.onchange = e =>  {
    files = e.target.files;
    var extension = GetFileExt(files[0]);
    var filename = GetFileName(files[0]);
    name.value = filename;
    extlab.innerHTML = extension;
    reader.readAsDataURL(files[0]);

  }
  reader.onload = function()
  {
    myimg.src = reader.result;
  }
  /*------------------------------Selection -----------------------------------*/
  selbtn.onclick = function()
  {
    input.click();
  }
  function GetFileExt(file)
  {
    var temp = file.name.split('.');
    var ext = temp.slice((temp.length-1),(temp.length));
    return '.' + ext[0];
  }
  function GetFileName(file)
  {
       var temp = file.name.split('.');
       var fname = temp.slice(0,1).join('.');
       return fname;
  }
</script>
</body>
</html>