@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Assignment 2 - Documentation</h1>
        <hr>
        <h4>Peer Review Reflection</h4>
        <hr>
        <p>I didn’t really participate in the peer reviews for the labs, having done two earlier in the semester and one for the first assignment, however from the peer reviews that I did participate in and from what I observed from others doing peer reviews was:</p>

<p>Reviewer – I feel as though I learnt how to give better feedback to the student / person whose work I was reviewing both through doing the peer review and overhearing or observing what other students were doing / saying.</p>

<p>Reviewee – I learnt to take feedback in a positive way and take the time to do the little things before it gets too hard to go back and change.</p>

<p>Initially, I didn’t see the point in doing the peer reviews, which is why I didn’t really participate, as the labs were just following along with the lecture videos (more or less) and therefore everyone would have essentially the same code and I would think that the person that made them was doing things correctly. Since then I have learned that doing code reviews is important for both you and the reviewee in identifying areas that you need to improve on and on the areas that you are doing well and that they are an important part of a developers toolkit and are done very regularly in industry.</p>
</p>
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