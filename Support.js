document.getElementById('support-form').addEventListener('submit', function(e) {  
    e.preventDefault();  
    
    const issue = document.getElementById('issue').value;  
    const email = document.getElementById('email').value;  

    if (issue && email) {  
        document.getElementById('response').innerHTML = `Thank you, your request has been submitted. We will contact you at ${email}.`;  
        document.getElementById('support-form').reset();  
    } else {  
        document.getElementById('response').innerHTML = 'Please fill in all fields.';  
    }  
});