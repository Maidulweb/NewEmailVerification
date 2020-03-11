<!DOCTYPE html>
<html lang="en">
<body>
  <div>
    <p>Dear {{ $user->username }}</p>
    <p>Please click for veryfi</p>
    <a href="{{route('verify', $user->email_verification_token)}}">
    {{route('verify', $user->email_verification_token)}}
    </a>
    </br>
    <p>Thank You</p>
  </div>

</body>
</html>
