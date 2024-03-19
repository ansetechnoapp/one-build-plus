<form class="relative max-w-lg md:ms-auto" method="POST" action="{{route('send.subscribeform')}}">
                          @csrf
            <input type="email" id="subcribe" name="emailsubcribe"
                class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                placeholder="Enter your email :">
            <button type="submit"
                class="btn bg-red-600 hover:bg-green-700 text-white rounded-full">S'abonner
            </button>
        </form>
        <!--end form-->