@extends('layouts.master')

@section('head')
  <link href="/css/indexStyle.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
  <form name="htmlform" method="post" action="/contact">
    <input type='hidden' value='{{ csrf_token() }}' name='_token'>
    <table width="450px">
      <tr>
        <td valign="top">
          <label for="first_name">Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="first_name" maxlength="50" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="email">Email Address *</label>
        </td>
        <td valign="top">
          <input  type="text" name="email" maxlength="80" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="comments">Message *</label>
        </td>
        <td valign="top">
          <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center">
          <input type="submit" value="Submit">
        </td>
      </tr>
    </table>
  </form>
@stop

@section('body')

@stop
