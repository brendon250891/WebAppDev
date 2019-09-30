@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Assignment 2 - Documentation</h1>
        <hr>
        <h4>Peer Review Reflection</h4>
        <hr>
        <p>I didn’t really participate in the peer reviews for the labs, having done two earlier in the semester and one 
        for the first assignment, however from the peer reviews that I did participate in I feel as though as a reviewer 
        I find It difficult to know.
        
        
        Maybe I missed the point to the as the labs are almost entirely just following along with the lecture videos 
        and therefore everyones will be mostly the same.</p>
        <h4>Completed Requirements</h4>
        <hr>
        <ul>
            <li>Users can register as either a restaurant or consumer.</li>
            <li>Registered users can login.</li>
            <li>Only restaurant users can add dishes, update and disable (don’t want to delete for consistency) existing dishes.</li>
            <li>All users and guests can see a list of restaurants.</li>
            <li>The dishes for each restaurant are paginated.</li>
            <li>Consumers can purchase a single dish and are taken to a review of their purchase once done.</li>
            <li>Restaurants can view a list of pending orders and all orders they’ve received.</li>
            <li>Users are redirected to the page they were visiting when the signed in.</li>
            <li>Dishes are unique for each restaurant.</li>
            <li>A restaurant can upload a photo at dish creation or dish update.</li>
            <li>Users can see the top 5 most ordered dishes.</li>
            <li>Administrator must approve restaurants before they can add dishes.</li>
        </ul>
        <h4>Uncompleted Requirements</h4>
        <hr>
        <ul>
            <li>Users can make multiple purchases</li>
        </ul>
        <h4>Entity Relation Diagram (ERD)</h4>
        <hr>
        <img src="images/erd.png" alt="Entity Relationship Diagram" width="400" height="400">
    </div>
@endsection