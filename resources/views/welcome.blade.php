<!DOCTYPE html>












@if(auth()->user())
@if(auth()->user()->role_id==5)
<a href="/auth/logout"> logout </a>homepage for guestpatient
@endif
@if(auth()->user()->role_id==2)
<a href="/auth/logout"> logout </a>homepage for patient
<a href="/patient/create"> reservation </a>


@endif
@endif
@if(!auth()->user())
home page for guest
<a href="/user/login"> login </a>
<br>
<a href="/medicalcompany/login"> login for company </a>
<br>
<a href="/auth/register"> user register </a>
@endif



