/* 
Author: Noah Osterhout
Project: NoahOsterhout.com V2
Created On: July 9th 2022
Last Edited On: July 9th 2022
File: Main.JS
*/

document.querySelector('#diploma').addEventListener('click', function(event) {
    event.preventDefault();  // prevent the button from navigating to the PDF file
    window.location.href = this.getAttribute('href');  // trigger the download action
});
