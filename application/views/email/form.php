<div class="container-fluid">
    <h3>Email Approval</h3>
    <?=form_open( base_url("email/index")) ?>
<fieldset>
  <div  class="form-group mt-3">
  To <input type="text"  name="to" class="form-control"></input>
  </div>


  <div  class="form-group mt-3">
  Subject <input type="text"  name="subject" class="form-control" value='Congratz'></input>
  </div>

  <div  class="form-group mt-3">
  Message
  
    <textarea  name="message" class="form-control"></textarea>
  </div>  

  <div  class="form-group mt-3">  
  
    <button name='send' class="btn btn-info btn-block ">Send Mail</button>
   </div>
  </fieldset> 
    </form>
</div>

