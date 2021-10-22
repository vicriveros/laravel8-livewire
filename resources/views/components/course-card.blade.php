    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('course', $course->slug) }}">
            <img src="{{ $course->image }}" alt="" class="rounded-md mb-2">
            <h2 class="text-lg text-gary-600 truncate uppercase">{{ $course->name }}</h2>
            <h3 class="text-md text-gary-500">{{ $course->excerpt }}</h3>

            <img src="{{ $course->user->avatar }}" alt="" class="rounded-full mt-4 mx-auto h-16 w-16">
        </a>
    </div>