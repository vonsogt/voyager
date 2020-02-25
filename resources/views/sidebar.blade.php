<aside class="flex flex-col justify-between h-full min-h-screen h-full aside-expand w-56 bg-white overflow-x-hidden fixed">

    <div class="flex flex-col justify-start">
        <a href="/admin" class="flex justify-start pl-8 items-center w-auto h-16 relative">
            
            <svg class="w-6 h-6 fill-current text-black" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg"><path d="M588.343 288.321h-44.4c-2.893-58.542-26.336-111.664-63.386-152.378l31.586-31.607c4.564-4.543 4.564-11.936 0-16.5-4.564-4.543-11.936-4.543-16.5 0l-31.607 31.607C423.343 82.393 370.22 58.97 311.657 56.1V11.657C311.657 5.207 306.43 0 300 0s-11.657 5.207-11.657 11.657V56.08C229.67 58.757 176.42 82.07 135.579 119.036l-31.222-31.179a11.653 11.653 0 00-16.5 0 11.653 11.653 0 000 16.5l31.179 31.179c-37.286 40.757-60.857 94.05-63.793 152.807H11.636C5.207 288.32 0 293.55 0 300c0 6.429 5.207 11.636 11.657 11.636h43.564c2.679 58.543 25.908 111.707 62.765 152.55L87.879 494.27a11.653 11.653 0 000 16.5 11.546 11.546 0 008.25 3.429c3 0 5.978-1.136 8.25-3.429l30.042-30c40.993 37.586 94.715 61.308 153.943 64.029v43.521C288.343 594.771 293.571 600 300 600c6.429 0 11.657-5.229 11.657-11.679v-43.564c58.8-2.893 112.072-26.486 152.872-63.793l31.114 31.136c2.271 2.25 5.25 3.429 8.25 3.429s5.957-1.179 8.25-3.429a11.653 11.653 0 000-16.5l-31.157-31.136c37.007-40.885 60.3-94.135 63-152.85h44.357C594.77 311.636 600 306.43 600 300c0-6.45-5.229-11.679-11.657-11.679zM311.657 118.564C353.08 121.221 390.686 137.7 420 163.521l-65.786 65.765a88.63 88.63 0 00-42.535-17.657v-93.065h-.022zm-23.314 0v93.065c-15.857 2.121-30.429 8.357-42.536 17.657l-65.786-65.765c29.315-25.821 66.922-42.3 108.322-44.957zM163.52 180l65.765 65.786a88.346 88.346 0 00-17.657 42.514h-93.043c2.635-41.379 19.114-78.964 44.935-108.3zm-44.935 131.636h93.043a88.672 88.672 0 0017.1 41.807l-65.85 65.828c-25.458-29.207-41.658-66.535-44.293-107.635zm169.757 169.757c-41.722-2.636-79.607-19.372-109.029-45.536l65.7-65.743a88.751 88.751 0 0043.307 18.257v93.022h.022zm11.678-131.957c-27.257 0-49.457-22.179-49.457-49.436s22.179-49.479 49.457-49.479c27.236 0 49.415 22.2 49.415 49.479 0 27.236-22.179 49.436-49.415 49.436zm11.636 131.957V388.35c15.879-2.1 30.429-8.379 42.557-17.657L420 436.479c-29.336 25.821-66.921 42.278-108.343 44.914zM436.5 420l-65.786-65.786c9.322-12.128 15.579-26.657 17.657-42.557h93.043C478.78 353.036 462.3 390.643 436.5 420zm-48.129-131.679a88.581 88.581 0 00-17.678-42.514l65.786-65.786c25.821 29.315 42.3 66.922 44.935 108.322h-93.043v-.022zm-88.35-14.442c-14.4 0-26.121 11.721-26.121 26.121 0 14.4 11.721 26.121 26.121 26.121 14.379 0 26.1-11.721 26.1-26.121 0-14.4-11.721-26.121-26.1-26.121z" /></svg>
            <span class="font-black text-black text-lg uppercase pl-2">Voyager</span>
        </a>

        <nav class="text-gray-500 px-5 mt-4">
            <p class="text-xs font-medium uppercase ml-3 mb-4">MAIN</p>
            <a :href="route('voyager.dashboard')" class="flex justify-start items-center no-underline h-10 pl-12 relative bg-black rounded-full">                   
                <svg class="fill-current absolute left-0 text-white w-5 h-5 ml-3" viewBox="0 0 20 20">
                    <path d="M4.68,13.716v-0.169H4.554C4.592,13.605,4.639,13.658,4.68,13.716z M11.931,6.465
                    c-0.307-0.087-0.623,0.106-0.706,0.432l-1.389,5.484c-0.901,0.084-1.609,0.833-1.609,1.757c0,0.979,0.793,1.773,1.773,1.773
                    c0.979,0,1.773-0.794,1.773-1.773c0-0.624-0.324-1.171-0.812-1.486l1.377-5.439C12.422,6.887,12.239,6.552,11.931,6.465z
                    M10.591,14.729H9.408v-1.182h1.183V14.729z M15.32,13.716c0.04-0.058,0.087-0.11,0.126-0.169H15.32V13.716z M10,3.497
                    c-3.592,0-6.503,2.911-6.503,6.503H4.68c0-2.938,2.382-5.32,5.32-5.32s5.32,2.382,5.32,5.32h1.182
                    C16.502,6.408,13.591,3.497,10,3.497z M10,0.542c-5.224,0-9.458,4.234-9.458,9.458c0,5.224,4.234,9.458,9.458,9.458
                    c5.224,0,9.458-4.234,9.458-9.458C19.458,4.776,15.224,0.542,10,0.542z M15.32,16.335v0.167h-0.212
                    c-1.407,1.107-3.179,1.773-5.108,1.773c-1.93,0-3.701-0.666-5.108-1.773H4.68v-0.167C2.874,14.816,1.724,12.543,1.724,10
                    c0-4.571,3.706-8.276,8.276-8.276c4.57,0,8.275,3.706,8.275,8.276C18.275,12.543,17.126,14.816,15.32,16.335z"></path>
                </svg>
                <span class="text-white text-xs font-medium leading-none">Dashboard</span>
            </a>

            <a href="{{ route('voyager.bread.index') }}" class="flex justify-start items-center no-underline h-10 pl-12 relative rounded-full mt-2">
                <svg class="fill-current absolute left-0 text-black w-5 h-5 ml-3" viewBox="0 0 20 20"><path d="M5.029 1.734h10.935a.575.575 0 000-1.151H5.029a.576.576 0 000 1.151zM1 5.188V19h18.417V5.188H1zm17.266 12.661H2.151V6.338h16.115v11.511zM2.727 4.036H17.69a.575.575 0 000-1.151H2.727a.575.575 0 100 1.151z"/></svg>
                <span class="text-black text-xs font-medium leading-none"> Data Types </span>
            </a>


            <a href="{{ route('voyager.ui') }}" class="flex justify-start items-center no-underline h-10 pl-12 relative rounded-full mt-2">
                <svg class="fill-current absolute left-0 text-black w-5 h-5 ml-3" viewBox="0 0 20 20"><path d="M18.783 13.198H15.73a.78.78 0 010-1.559h2.273V3.652H7.852v.922c0 .433-.349.78-.78.78a.778.778 0 01-.78-.78V2.872c0-.43.349-.78.78-.78h11.711c.431 0 .78.35.78.78v9.546a.781.781 0 01-.78.78z"/><path d="M12.927 17.908H1.217a.781.781 0 01-.78-.78V7.581c0-.43.349-.78.78-.78h11.709c.431 0 .78.35.78.78v9.546c0 .43-.349.781-.779.781zm-10.93-1.56h10.15V8.361H1.997v7.987z"/></svg>
                <span class="text-black text-xs font-medium leading-none"> UI Components </span>
            </a>

            <a href="{{ route('voyager.ui') }}" class="flex justify-start items-center no-underline h-10 pl-12 relative rounded-full mt-2">
                <svg class="fill-current absolute left-0 text-black w-5 h-5 ml-3" viewBox="0 0 20 20"><path d="M6.176 7.241V6.78a.403.403 0 00-.805 0v.461a1.413 1.413 0 00-1.006 1.35c0 .636.424 1.175 1.006 1.35v3.278a.403.403 0 00.805 0V9.941a1.412 1.412 0 001.006-1.35 1.411 1.411 0 00-1.006-1.35m-.402 1.954a.606.606 0 01-.604-.604c0-.332.272-.604.604-.604.332 0 .604.272.604.604a.607.607 0 01-.604.604m4.628.863V6.78a.403.403 0 00-.804 0v3.278a1.412 1.412 0 00-1.006 1.35c0 .637.424 1.175 1.006 1.351v.461a.403.403 0 00.804 0v-.461a1.413 1.413 0 001.006-1.351c0-.636-.424-1.175-1.006-1.35M10 12.013c-.333 0-.604-.272-.604-.604s.271-.604.604-.604c.332 0 .604.271.604.604s-.272.604-.604.604m4.629-3.565V6.78a.403.403 0 00-.805 0v1.668a1.413 1.413 0 00-1.006 1.35c0 .636.425 1.176 1.006 1.351v2.07a.403.403 0 00.805 0v-2.07a1.415 1.415 0 001.006-1.351c0-.635-.425-1.174-1.006-1.35m-.403 1.954a.607.607 0 01-.604-.604c0-.332.272-.604.604-.604.332 0 .604.272.604.604a.606.606 0 01-.604.604m3.421-6.44H2.353a.403.403 0 00-.402.402v11.27c0 .222.181.402.402.402h15.295a.403.403 0 00.402-.402V4.365a.404.404 0 00-.403-.403m-.402 11.27H2.755V4.768h14.49v10.464z"/></svg>
                <span class="text-black text-xs font-medium leading-none"> Settings </span>
            </a>
        

            <p class="text-xs font-medium uppercase ml-3 mb-2 mt-12">DATA</p>
            <a href="{{ route('voyager.ui') }}" class="flex justify-start items-center no-underline h-10 pl-12 relative rounded-full mt-2">
                <svg class="fill-current absolute left-0 text-black w-5 h-5 ml-3" viewBox="0 0 20 20"><path d="M10 10.9a4.31 4.31 0 004.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696 4.223 5.696 6.594A4.31 4.31 0 0010 10.9zm0-7.569a3.268 3.268 0 013.266 3.263A3.27 3.27 0 0110 9.861a3.27 3.27 0 01-3.265-3.267c0-1.8 1.465-3.263 3.265-3.263zM10 12.503c-4.418 0-7.878 2.058-7.878 4.685a.518.518 0 101.039 0c0-1.976 3.132-3.646 6.84-3.646 3.707 0 6.838 1.671 6.838 3.646a.52.52 0 001.041 0c-.001-2.627-3.462-4.685-7.88-4.685z"/></svg>
                <span class="text-black text-xs font-medium leading-none"> Users </span>
            </a>
        
            
        </nav>
    </div>


    <div>
        <button class="rounded-full bg-gray-100 ml-3 mb-3 focus:outline-none outline-none px-3 py-2" @click="$globals.toggleDarkMode">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 8.51v1.372h-2.538c.02-.223.038-.448.038-.681 0-.237-.017-.464-.035-.69h2.535zm-10.648-6.553v-1.957h1.371v1.964c-.242-.022-.484-.035-.726-.035-.215 0-.43.01-.645.028zm5.521 1.544l1.57-1.743 1.019.918-1.603 1.777c-.25-.297-.593-.672-.986-.952zm-10.738.952l-1.603-1.777 1.019-.918 1.57 1.743c-.392.28-.736.655-.986.952zm-1.597 5.429h-2.538v-1.372h2.535c-.018.226-.035.454-.035.691 0 .233.018.458.038.681zm9.462 9.118h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm0 2h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm.25 2h-4.5l1.188.782c.154.138.38.218.615.218h.895c.234 0 .461-.08.615-.218l1.187-.782zm3.75-13.799c0 3.569-3.214 5.983-3.214 8.799h-1.989c-.003-1.858.87-3.389 1.721-4.867.761-1.325 1.482-2.577 1.482-3.932 0-2.592-2.075-3.772-4.003-3.772-1.925 0-3.997 1.18-3.997 3.772 0 1.355.721 2.607 1.482 3.932.851 1.478 1.725 3.009 1.72 4.867h-1.988c0-2.816-3.214-5.23-3.214-8.799 0-3.723 2.998-5.772 5.997-5.772 3.001 0 6.003 2.051 6.003 5.772z"/></svg>
        </button>
    </div>

</aside>
