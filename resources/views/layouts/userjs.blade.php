<script>
    $(document).ready(function(){
        $('#edit_student_education_form').hide();
        $htmlE = `<form action="{{route('update_student_education')}}" method="POST">
                                   @csrf
            <input type="hidden" name="id" value="{{$userEducation->id}}">
        <label for="school_student">School</label>
        <input name="school_student" value="{{$userEducation->school == '' ? '':$userEducation->school }}">
                                   <label for="class_student">Class</label>
                                   <input name="class_student" value="{{$userEducation->class}}">
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
    });

$('#edit_user_profile').on('click',function(){
    $('#edit_user_profile_data').hide();
    $('#profile_form_user').show();
});
    $('#edit_education_student').on('click',function(){
        $('#update_student_data').hide();
        $('#edit_student_education_form').show();
    });

    function editLanguage($id)
    {
        $html = `
        `;
        $('#edit_Modal').modal('show');
    }
</script>
