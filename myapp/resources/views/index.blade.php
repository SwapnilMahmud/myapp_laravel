<!DOCTYPE html>
<html>
    <head>
        <title>dropdown</title>
    </head>
    <body>

<select id="country">
<option value="">select country</option>
    @foreach($country as $list)
    <option value="{{$list->id}}">{{$list->country}}</option>
    @endforeach
</select>
<select id="state">
    <option value="">select state</option>
</select>
<select id="city">
    <option value="">select city</option>
</select>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function(){
       jQuery('#country').change(function(){
           let cid=jQuery(this).val();
           jQuery('#city').html('<option value="">select city</option>');
        //    alert(cid);
        jQuery.ajax({
                 url:'/getState',
                 type:'post',
                 data:'cid='+cid+'&_token={{csrf_token()}}',
                 success:function(result){
                     jQuery('#state').html(result);
                 }
           });
       
       });
       
       jQuery('#state').change(function(){
           let sid=jQuery(this).val();
        //    alert(sid);
        jQuery.ajax({
                 url:'/getCity',
                 type:'post',
                 data:'sid='+sid+'&_token={{csrf_token()}}',
                 success:function(result){
                     jQuery('#city').html(result);
                 }
           });
       
       });       
    });
</script>
    </body>
</html>

