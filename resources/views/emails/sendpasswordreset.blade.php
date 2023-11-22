
<div style="width: 100%">
    <section>
            <div class="container z-3">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        <a href="{{route('home')}}"><img  src="{{env('APP_URL')}}/assets/images/logo-dark.png" class="mx-auto" alt=""></a>
                        <br><br><br><br><br>
                        <h2 style="text-align: center;">One Build Plus (OBP)</h2>
                        <br><br><br>
                        <div style="display: flex;justify-content: center;">
                            <a href="{{route('formupdatepassword', ['email' => $datas['email']])}}" style="background-color: rgb(229, 62, 62, 1);
color: white;
font-weight: 500;
font-size: 17px;
line-height: 24px;
padding-top: 0.5rem;
padding-bottom: 0.5rem;
padding-left: 1.5rem;
padding-right: 1.5rem;
border-radius: 0.375rem;">Cliquer Pour Changer Le Mot de Passe</a><br>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            {{ config('app.name') }} vous Remercie Mercie.
        </div>