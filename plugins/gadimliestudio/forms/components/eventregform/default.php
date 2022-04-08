<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">{{ 'Ad və soyad' |_ }}</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">{{ 'Email' |_ }}</label>
    <input type="email" class="form-control" id="email" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">{{ 'Telefon nömrəsi' |_ }}</label>
    <input type="number" class="form-control" id="exampleFormControlInput1">
  </div>
<input name="link" type="hidden" value="https://edusupport.global/ru/meropriyatiya/{{ project.id }}">
  <div class="form-group">
    <label for="exampleFormControlSelect2">{{ 'Source' |_ }}</label>
    <select class="form-control" name="source">
      <option value="1">Default select</option>
      <option value="2">Default select</option>
      <option value="3">Default select</option>
      <option value="4">Default select</option>
    </select>
  </div>
<button type="submit" class="btn btn-success">{{ 'Göndər' |_ }}</button>
</form>

<script>
    function formSuccess(form, context, data, textStatus, jqXHR) {
       if(data['status'] != 200) 
           status = 'error'; 
           else {
               form.reset();
               status = 'success'; 
           }
       $.oc.flashMsg({
           'text': data['msg'],
           'class': status,
           'interval': 3
       });
    }
</script>