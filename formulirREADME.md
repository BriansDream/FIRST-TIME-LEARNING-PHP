<!-- Step 2 -->

<!-- CREATE FORMULIR -->
To solve this, let's create contact formulir.
We can desain formulir with HTML and then using PHP for handle input value.

<!-- PREPARE FORMULIR -->
When we create formulir, we use HTML tag <form> 
and for attribute we use action, define URL for passing data.
method attribute given GET or POST for send formulir value.

When using GET, value that we pass will be displayed on URL 
but if we use POST, that value will be hidden from the URL.


<!-- attribute -->
ACTION = TUJUAN, mthod: GET OR POST;

to make input text we use HTML tag <input> then use NAME attribute
to take input value. This attribute used for accept data formulir.



<!-- ACCEPT DATA FROM FORMULIR -->
we can use $_POST for accept value that send from formulir.

// $_POST adalah array associative.

therefor we can accept value that we send with put name attribute from <input> and <textarea> inside [];

   echo $_POST["girlfriend"]; => dibelakang layar $_POST adalah array asociative jadi nilai yang dikirimkan dari <form> akan disimpan didalam $_POST;


   <!-- how to create choose option -->
We can create dropdown box use HTML tag <option>
inside <select> tag.
Content <option> tag showed as a choice.

// SEND VALUE THAT WE CHOOSE
<select> tag has an NAME attribute for accept value 
with $_POST, sedangkan attribute VALUE from <option> tag adalah
value that will be send.


<!-- MENYELESAIKAN FORMULIR -->
Create much <option> tag using loop and subtitution variable.