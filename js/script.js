function validate(){
   //Считаем значения из полей name
   var form=document.forms.form;
   var name= form.elements.name;
   var fixname = name.value.trim();
   //Если поле name пустое выведем сообщение и предотвратим отправку формы
   if (fixname==0){
   	document.getElementById('name').value = fixname;
   	alert("Заполните пожалуйста форму");
    return false;
   }else
   {
   	document.getElementById('name').value = fixname;
   }
}