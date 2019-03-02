<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
    <li class="nav-item">
        @if($tab==1)
            <a class="nav-link active" href="{{ route('register.teacher') }}" aria-selected="true">Teacher</a>
        @else
            <a class="nav-link" href="{{ route('register.teacher') }}" aria-selected="false">Teacher</a>
        @endif
    </li>
    <li class="nav-item">

        @if($tab==2)
            <a class="nav-link active" href="{{ route('register.student') }}" aria-selected="true">Student</a>
        @else
            <a class="nav-link" href="{{ route('register.student') }}" aria-selected="true">Student</a>
        @endif
    </li>
    <li class="nav-item">
        @if($tab==3)
            <a class="nav-link active" href="{{ route('register.admin') }}" aria-selected="true">Admin</a>
        @else
            <a class="nav-link" href="{{ route('register.admin') }}" aria-selected="false">Admin</a>
        @endif
    </li>
    <li class="nav-item">
        @if($tab==4)
            <a class="nav-link active" href="{{ route('register.') }}" aria-selected="true">Account</a>
        @else
            <a class="nav-link" href="{{ route('register.admin') }}" aria-selected="false">Account</a>
        @endif
    </li>
</ul>
