let uname=document.getElementById('uname');
let pass=document.getElementById('pass');
let cpass=document.getElementById('cpass');
let form=document.getElementById('form');
let checkboxes=document.querySelectorAll('#check');
let radio_button=document.querySelectorAll('#g_check');
let id_no=document.querySelector('#id_no');
let isvalidid=false;
let isvalidName=false;
let isvalidPass=false;
let isvalidCpass=false;
let isvalidCheckBox=false;
let isvalidbutton=false;
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    validate();
})
function validate(){
    isvalidName=false;
    isvalidPass=false;
    isvalidCpass=false;
    //Name checking
    let name_val=uname.value.trim();
    let name_pattern=/^[a-zA-Z]+$/;
    if(name_val===''){
        setError(uname,'Name is required');
    }
    else if(!(name_pattern.test(name_val))){
        setError(uname,"Check your name pattern once");
        isvalidName=false;
    }
    else if(name_val.length<3){
        setError(uname,'Name length should not less than 3');
        isvalidName=false;
    }
    else{
        setSuccess(uname);
        isvalidName=true;
    }
    //Password checking
    let pass_val=pass.value.trim();
    if(pass_val==''){
        setError(pass,'Password should not empty');
    }
    else if(pass_val.length<3){
        setError(pass,'Password length should atleast 3');
    }
    else{
        setSuccess(pass);
        isvalidPass=true;
    }
    //Confirm Password
    let cpass_val=cpass.value.trim();
    if(cpass_val==''){
        setError(cpass,'Password should not empty');
    }
    else if(cpass_val!=pass_val){
        setError(cpass,'Password is not matched');
    }
    else{
        setSuccess(cpass);
        isvalidCpass=true;
    }
    //check box validation
    let count=0;
    for(i=0;i<checkboxes.length;i++){
        if(checkboxes[i].checked){
            count++;
        }
    }
    if(count==0||count<3){
            setError(checkboxes[0],'Select atleast 3 subjects');
            isvalidCheckBox=false;
    }
    else{
        setSuccess(checkboxes[0]);
        isvalidCheckBox=true;
    }
    //radio button validation
    for(i=0;i<radio_button.length;i++){
        if(radio_button[i].checked){
            break;
        }
    }
    if(i==radio_button.length){
            setError(radio_button[0],'Select only one option');
            isvalidbutton=false;
    }
    else{
        setSuccess(radio_button[0]);
        isvalidbutton=true;
    }
    //check ID pattern
    let id_pattern=/^[r/R][0-9]{6}$/;
    let id_value=id_no.value.trim();
    if(id_value==''){
        setError(id_no,'ID is required');
        isvalidid=false;
    }
    else if(!(id_pattern.test(id_value))){
        setError(id_no,"Check your id pattern once");
        isvalidid=false;
    }
    else{
        setSuccess(id_no);
        isvalidid=true;
    }
    if(isvalidName && isvalidPass && isvalidCpass && isvalidCheckBox && isvalidid){
        const submitFormFunction = Object.getPrototypeOf(form).submit;
        submitFormFunction.call(form);
    }
}
function setError(input,msg){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.innerText=msg;
    small.style.color="red";
    }
function setSuccess(input){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.style.visibility="hidden";
}