<div  class="containerHeader" @switch(Route::currentRouteName())
@case('announcements.show') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER9.jpg")'@break
@case('login') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER10.jpg")'@break
@case('announcements.create') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER11.jpg")'@break
@case('announcements.index') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER10.jpg")'@break
@case('register') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER13.jpg")'@break
@case('revisor.show') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER16.jpg")'@break
@case('revisor.index') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER16.jpg")'@break
@case('faq') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.087) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER18.jpg")'@break
@case('announcements.personal') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.087) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER20.jpg")'@break
@case('formCv') style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.087) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER21.jpg")'@break


@default style='background-image: linear-gradient(to top, white 0%, rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 100%), url("/img/HEADER7.jpg")'
@endswitch
>

</div>