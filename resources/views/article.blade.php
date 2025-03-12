@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Article" />

    <div class="blog-detials-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-details-content py-0 my-0">
                                    <h2 class="mb-3">{{ $article->name }}</h2>
                                </div>
                                <div class="blog-details-meta text-dark p-0 m-0">
                                    <span class=""><i class="far fa-calendar-alt"></i>
                                        {{ $article->created_at->format('M d, Y') }}</span>
                                    <span><i class="far fa-comments"></i> 3 Comments</span>
                                </div>
                                <div class="blog-details-des">
                                    <img class="img-thumbnail" src="{{ asset("storage/{$article->image}") }}"
                                        alt="">
                                    {!! $article->description !!}
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <button class="btn btn-sm btn-info rounded">Read More</button>
                            </div> --}}
                            <div class="col-12 my-4">
                                <div class="blog-details-socials d-flex justify-content-between">
                                    <h5 class="d-inline-block">Share on Social Media</h5>
                                    <div>
                                        <a class="btn btn-primary text-light px-5"
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('article', $article)) }}"
                                            target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-primary text-light px-5 mx-1"
                                            href="https://twitter.com/intent/tweet?url={{ urlencode(route('article', $article)) }}"
                                            target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-primary text-light px-5"
                                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('article', $article)) }}"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="blog-details-content">
                                    <h3>2 Comments</h3>
                                </div>
                                <div id="commentary-box"></div>
                            </div>
                            <div class="col-12">
                                <div class="blog-details-content">
                                    <h3>Post Comment</h3>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="">
                                            <textarea class="form-control" name="comment" id="new_comment" rows="6" placeholder="Write here..."></textarea>
                                        </div>
                                        <div class="float-end my-3">
                                            <div class="d-inline mx-2 user">User Name</div>
                                            <button type="submit" class="btn btn-primary"
                                                onclick="postComment()">Comment</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="status"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <x-article-sidebar :article="$article" />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('reply')
    <div class="row">
        <div class="col-12">
            <div class="">
                <textarea class="form-control" name="message" id="answer" rows="6" placeholder="Write here..."></textarea>
            </div>
            <div class="float-end mt-3">
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <style>
        .blog-details-des {
            text-align: justify;
        }

        .blog-details-des img {
            float: left;
            max-width: 320px;
            height: auto;
        }

        @media (max-width: 992px) {
            .blog-details-des img {
                float: none;
                display: block;
                margin: 0 auto;
            }
        }
    </style>
@endpush


@push('scripts')
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-firestore-compat.js"></script>

    <script>
        // Comment box template
        function getCommentBox(commentId) {
            // console.log(commentId);
            return `<div class="mt-2 mb-5 pb-5">
                        <div class="">
                            <textarea class="form-control" name="message" rows="4" placeholder="Reply here..."></textarea>
                        </div>
                        <div class="float-end mt-1">
                            <button type="submit" class="btn btn-danger" onclick="closeAllReplies()">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="postComment('${commentId}')">Reply</button>
                        </div>
                </div>`;
        }

        function makeReply(commentId) {
            const user = auth.currentUser;

            if (!user) {
                googleLogin();
            }

            closeAllReplies();
            const replyBox = $(`#reply_to_${commentId}`);
            replyBox.html(getCommentBox(commentId));
        }

        function closeAllReplies() {
            const replyBoxes = $(".replyhere");
            for (let i = 0; i < replyBoxes.length; i++) {
                replyBoxes[i].innerHTML = "";
            }
        }
 

        function escapeHTML(text) {
            const div = document.createElement('div');
            div.innerText = text;
            return div.innerHTML;
        }

        function getComment(comment, replyClass = "") {
            return new Promise((resolve) => {
                // Wait for Firebase auth to be ready
                firebase.auth().onAuthStateChanged((user) => {
                    const isCommentOwner = user && comment.guid === user.uid;

                    const userName = escapeHTML(comment.user_name || "Anonymous");
                    const userText = escapeHTML(comment.text || "");
                    const userImage = comment.image_url || 'default-avatar.png';
                    const createdAt = new Date(comment.created_at).toLocaleString();

                    let commentHTML = `
                        <div class="blog-details-comment ${replyClass}">
                            <div class="blog-details-comment-reply">
                                ${isCommentOwner ? `
                                <button class="btn btn-sm btn-danger" onclick="deleteComment('${comment.id}')">Delete</button>` : ''}
                                <button class="btn btn-sm btn-primary" onclick="makeReply('${comment.id}')">Reply</button>
                            </div>
                            <div class="blog-details-comment-thumb">
                                <img class="rounded" src="${userImage}" alt="User Image" loading="lazy" />
                            </div>
                            <div class="blog-details-comment-content">
                                <h2>${userName}</h2>
                                <span>${createdAt}</span>
                                 <p>${userText}</p>
                            </div>
                            <div id="reply_to_${comment.id}" class="replyhere"></div>
                    `;

                    // Process nested replies recursively
                    if (comment.replies && comment.replies.length > 0) {
                        Promise.all(comment.replies.map(reply => getComment(reply, "reply")))
                            .then(repliesHTML => {
                                commentHTML += repliesHTML.join('');
                                commentHTML += `</div>`;
                                resolve(commentHTML);
                            });
                    } else {
                        commentHTML += `</div>`;
                        resolve(commentHTML);
                    }
                });
            });
        }


        // Your Firebase Configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAIx0D1BFoUD3CSYieapKhtNKy7S_E8YGo",
            authDomain: "sb-lab-bangladesh.firebaseapp.com",
            projectId: "sb-lab-bangladesh",
            storageBucket: "sb-lab-bangladesh.firebasestorage.app",
            messagingSenderId: "791173001264",
            appId: "1:791173001264:web:e408b8ecbf067817e2fdf5"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const auth = firebase.auth();
        const db = firebase.firestore();

        // Google Login
        function googleLogin() {
            const provider = new firebase.auth.GoogleAuthProvider();
            auth.signInWithPopup(provider).then((result) => {
                return;
            }).catch(error => console.error(error));
        }

        // Post Comment
        async function postComment(commentable_id = null) {

            let user = auth.currentUser;

            if (!user) {
                await googleLogin();
                user = auth.currentUser;
                if (!user) {
                    alert('Login is required to post a comment.');
                    return;
                }
            }

            let commentable_type, commentText;

            // Determine the commentable type and ID
            if (!commentable_id) {
                commentable_type = "App\\Models\\Article";
                commentable_id = {{ $article->id }};
                commentText = $('#new_comment').val();
            } else {
                commentable_type = "App\\Models\\Comment";
                commentText = $(`#reply_to_${commentable_id}`).find('textarea').val();
            }
 
            if (commentText.trim() === "") {
                alert("Comment cannot be empty!");
                return;
            }

            $.ajax({
                url: '{{ route('comment.store') }}',
                type: 'POST',
                data: {
                    commentable_type: commentable_type,
                    commentable_id: commentable_id,
                    guid: user.uid,
                    user_name: user.displayName,
                    user_email: user.email,
                    image_url: user.photoURL,
                    text: commentText,
                },
                success: function(response) {
                    $('#status').html('Comment posted successfully!');
                    if (commentable_type === "App\\Models\\Comment") {
                        $(`#reply_to_${commentable_id}`).find('textarea').val('');
                    } else {
                        $('#new_comment').val('');
                    }
                    loadComments();
                },
                error: function(xhr, status, error) {
                    console.error('Error:', xhr, status, error);
                }
            });
        }

        function deleteComment(commentId) {
            if (confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ route('comment.destroy', ['comment' => 'COMMENT_ID']) }}'.replace('COMMENT_ID',
                        commentId),
                    type: 'DELETE',
                    data: {
                        comment_id: commentId,
                    },
                    success: function(response) {
                        loadComments();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
        }

        function loadComments() {
           
            $.ajax({
                url: '{{ route('comment.index') }}',
                type: 'GET',
                data: {
                    commentable_type: 'App\\Models\\Article',
                    commentable_id: {{ $article->id }},
                },
                dataType: 'json',
                success: function(res) {
                    let commentsHTML = "";
                    Promise.all(res.comments.map(comment => getComment(comment)))
                        .then(commentsHTML => { 
                            $('#commentary-box').html(commentsHTML.join(''));
                        });

                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Auto-load comments
        $(document).ready(function() {
            loadComments();
        });
    </script>
@endpush




{{-- <button class="btn btn-sm btn-warning" onclick="editComment('${comment.id}', '${userText}')">Edit</button> --}}