@extends('layouts.homeLayout')
@section('general-wrapper')

    <div class="general-wrapper " id="app">
        <header>
            <nav>
                <section class="top-nav">
                    <div class="app-title">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <input id="menu-toggle" type="checkbox"/>
                    <label class='menu-button-container' for="menu-toggle">
                        <div class='menu-button'></div>
                    </label>
                    <ul class="menu">
                        <li><a href="{{url('../settings_layout')}}"><img src="{{asset(('pictures/user-picture/Bradd.jpg'))}}" alt="" class="user-profile"></a></li>
                    </ul>
                </section>

            </nav>
        </header>

        <div class="message-nav">
            <div class="mini-nav">
                <ul>
                    <li>Messages</li>
                    <li>Matches</li>
                </ul>
            </div>
            <div class="message-content">
                <h1>
                    Say Hello!
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium adipisci assumenda est eum impedit ipsam iusto labore nam natus, numquam omnis pariatur perspiciatis possimus, praesentium quaerat quam, qui quia quibusdam recusandae reiciendis rerum sapiente sequi sunt ullam voluptate voluptatum.
                </p>
            </div>
        </div>


        <main>


            <div class="main-wrapper">
                <section class="user-first-info">
                    <div class="profile-wrapper">
                        <div class="main-image-wrapper">
                            <img src="{{asset(('pictures/user-picture/Bradd.jpg'))}}" alt="" class="user-img">
                        </div>
                        <div class="info-user">
                            <div class="name-info-user">
                                <div>Marcelo <span>18</span></div>
                                <div>
                                    <button onclick="displayInfo()" class="btn-user-info">
                                        <a href="#secondInfo"><i
                                                class="fa-solid fa-circle-exclamation additional-user-info"></i></a>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="selectors-user">
                        <i class="fa-solid fa-circle-xmark x-mark"></i>
                        <i class="fa-solid fa-circle-check check-mark"></i>
                        <i class="fa-solid fa-heart hearth-mark"></i>
                    </div>

                </section>
                <section class="user-second-info" id="secondInfo">
                    <div class="principal-user-info">
                        <article>
                            <h2>
                                Description
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. or eos facilis, fugiat iste
                                labore, libero magnam molestias natus nesciunt, non odit optio perferendis placeat quam qui
                                quo quos recusandae reiciendis repellendus rerum saepe sed sint tenetur ut vero voluptas.
                                Alias autem blanditiis consectetur, delectus dicta ea esse facere in inventore natus, nisi
                                pariatur rem voluptatem. Consectetur dolorum numquam optio quaerat ratione soluta sunt!
                            </p>
                        </article>
                        <article>
                            <h2>
                                Interests
                            </h2>
                            <div class="interest-user-info">
                                <div class="bubble-user-interest"><p>Eat</p></div>
                                <div class="bubble-user-interest"><p>Drink</p></div>
                                <div class="bubble-user-interest"><p>Watch TV</p></div>
                                <div class="bubble-user-interest"><p>Cycling</p></div>
                            </div>

                        </article>
                        <article>
                            <h2>
                                Social Media
                            </h2>
                            <div class="social-media-user">
                                <div class="social-media"><i class="fa-brands fa-facebook"></i></div>
                                <div class="social-media"><i class="fa-brands fa-instagram-square"></i></div>
                                <div class="social-media"><i class="fa-brands fa-whatsapp-square"></i></div>
                            </div>
                        </article>

                        <article>
                            <h2>Galeria</h2>
                        </article>
                    </div>
                </section>

            </div>
        </main>
        <footer>
            <p>Found Love 2022 all rights reserved</p>
        </footer>
    </div>

@endsection

