<div class="col-md-12 panel-profile__avatar">
    <img class="avatar-img"
         src="{{ asset('uploads/avatars/' . Auth::user()->avatar) }}">
</div>
<div class="col-md-12 panel-profile__global">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Age</th>
                <th>Username</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td>{{ Auth::user()->present()->accountAge }}</td>
                <td>{{ Auth::user()->username }}</td>
                <td>{{ Auth::user()->present()->accountGender }}</td>
            </tr>
        </table>
        <p>
            Birthday: {{ date('d M Y',strtotime(Auth::user()->dob))  }}</p>

    </div>
    <div class="profile__global-bio">
        <p>{{ Auth::user()->bio }}</p>
    </div>
</div>