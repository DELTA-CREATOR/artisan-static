@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Make Contact</h1>

    <form method="post" data-netlify="true">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label>Your Role: <select name="soul[]" multiple>
              <option value="Delta">Delta</option>
        <option value="Omega">Omega</option>
        <option value="undetermined">undetermined</option>
      </select></label>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input name="subject" style="display: none;" value="Blog Contact Page">

        <input type="hidden" name="after" value="{{ $page->production ? $page->baseUrl : 'http://localhost:3000' }}/contact/sent">

        <input type="text" name="trapit" value="" style="display: none;">

        <input type="hidden" name="replyto" value="%email">

        <input type="submit" value="Send">
    </form>
@endsection
