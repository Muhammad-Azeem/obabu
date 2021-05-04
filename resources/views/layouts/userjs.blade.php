<script>
    $(document).ready(function(){
        $('#edit_student_education_form').hide();
        $('#edit_about').hide();
        $htmlE = `<form action="{{route('update_student_education')}}" method="POST">
                                   @csrf
           @if(isset($userEducation->id))
        <input type="hidden" name="id" value="{{$userEducation->id}}">
        <label for="school_student">School</label>
        <input name="school_student" value="{{$userEducation->school == '' ? '':$userEducation->school }}">
                                   <label for="class_student">Class</label>
                                   <input name="class_student" value="{{$userEducation->class}}">
                                   @else
        <input type="hidden" name="id" value="">
        <label for="school_student">School</label>
        <input name="school_student" value="">
                                   <label for="class_student">Class</label>
                                   <input name="class_student" value="">
            @endif
                                   <button type="submit" >save</input>
                               </form>`;
        $('#edit_student_education_form').html($htmlE);
        $('#profile_form_user').hide();
        $html = ` <form action="{{route('update_user_profile')}}" method="POST">
        @csrf
                                        <input type="text form-controll" name="name" value="{{$user->name}}">
                                        <input type="text form-controll" value="{{$user->name}}">
                                        <input type="text form-controll"value="{{$user->name}}">
                                        <input type="text form-controll" name="address" value="{{$user->address}}">
                                        <input type="text form-controll" name="email" value="{{$user->email}}">
                                        <input type="text form-controll" name="phone" value="{{$user->phone}}" }}>
                                        <input type="text form-controll" name="age" value="{{$user->age}}">
                                        <input type="text form-controll" name="gender" value="{{$user->gender}}" }}>
                                        <button type="submit" >save</input>
                                    </form>`;
        $('#profile_form_user').html($html);
        $('#teacher_form_user').hide();
        $html1 = ` <form action="{{route('update_teacher_profile')}}" method="POST">
        @csrf
            <input type="hidden" value"true" name="teacher_check">
        <input type="text form-controll" name="name" value="{{$user->name}}">
        <input type="text form-controll" name="age" value="{{$user->age}}">
                                        <input type="text form-controll" name="address" value="{{$user->address}}">
                                        <input type="text form-controll" name="email" value="{{$user->email}}">
                                        <button type="submit" >save</input>
                                    </form>`;
        $('#teacher_form_user').html($html1);
    });

$('#edit_user_profile').on('click',function(){
    $('#edit_user_profile_data').hide();
    $('#profile_form_user').show();
});
    $('#edit_teacher_profile').on('click',function(){
        $('#edit_teacher_profile_data').hide();
        $('#teacher_form_user').show();
    });
    $('#edit_education_student').on('click',function(){

        $('#edit_education').modal('show');
    });
    $('#edit_teacher_education').on('click',function(){

        $('#teacher_education').modal('show');
    });
    function editLanguage($id)
    {
        $.ajax({
            url: "{{route('get_user_language')}}",
            data:{'id':$id},
            success: function(html){
                $("#results").append(html);
            }
        });
        $html = `<form action="{{route('edit_language')}}" method="POST">
                    @csrf
        <input type="hidden" name="id">
        <label for="language">Language</label>
        <div class="cntcn_inp">
        <input class="form-control" type="text" value="" name="language">
        </div>
        <label for="level">level</label>
        <div class="cntcn_inp">
           <select class="form-control" name="level">
               <option value="native">Native</option>
               <option>Native</option>
               <option>Native</option>
           </select>
           <button type="" class="btn btn-primary" > save</button>
        </div></form>`;
        $('#modal_content').html($html);
        $('#edit_Modal').modal('show');
    }
    function add_language()
    {
        $html = `<form action="{{route('edit_language')}}" method="POST">
                    @csrf
        <input type="hidden" name="id">
        <label for="language">Language</label>
        <div class="cntcn_inp">
        <input class="form-control" type="text" value="" name="language">
        </div>
        <label for="level">level</label>
        <div class="cntcn_inp">
           <select class="form-control" name="level">
               <option value="native">Native</option>
               <option>Native</option>
               <option>Native</option>
           </select>
           <button type="" class="btn btn-primary" > save</button>
        </div></form>`;
        $('#modal_content').html($html);
        $('#edit_Modal').modal('show');
    }

    function savechages()
    {
        alert('hit');
        $('#add_edit_modal').submit();
    }

    function add_inrest()
    {
        $('#user_interest1').modal('show');

    }

    $('#edit_teacher_expernce').on('click',function (){
        $html = `<form action="{{route('teacher_expernce')}}" method="POST" >
                    @csrf
        <div class="cntcn_inp">
           <input name="school" type="text" class="form-control" placeholder="School">

        </div>
        <div class="cntcn_inp">
                <input name="designation" class="form-control" type="text" placeholder="Designation">

        </div>
        <button type="" class="btn btn-primary" > save</button>
    </form>`;
        $('#modal_content_expe').html($html);
        $('#teacher_education').modal('show');
    });

    $('#edit_teacher_about').on('click',function(){
        $('#about_user').hide();
        $('#edit_about').show();
    });
</script>
