@php $current_url = url()->current(); @endphp

<nav class="border-gray-200 bg-['#F9F5F0'] container mx-auto" x-data="{ mobileOpen: false }">
  <header class="py-[27px] bg-[#F9F5F0] ">
    <nav class="justify-between flex items-center">
      <div class="flex gap-[12px] items-center justify-center">
        <svg
          width="40"
          height="40"
          viewBox="0 0 40 40"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M13.7146 0.503525C11.4582 0.503525 9.2943 1.378 7.69881 2.93458L0 10.4456V13.8836C0 16.3126 1.06944 18.4979 2.77401 20.0157C1.06944 21.5336 0 23.7188 0 26.1478V29.5859L7.69881 37.0969C9.2943 38.6535 11.4582 39.5279 13.7146 39.5279C16.2043 39.5279 18.4442 38.4846 20 36.8216C21.5558 38.4846 23.7957 39.5279 26.2854 39.5279C28.5418 39.5279 30.7057 38.6535 32.3012 37.0969L40 29.5859V26.1478C40 23.7188 38.9306 21.5336 37.226 20.0157C38.9306 18.4979 40 16.3126 40 13.8836V10.4456L32.3012 2.93458C30.7057 1.378 28.5418 0.503525 26.2854 0.503525C23.7957 0.503525 21.5558 1.54688 20 3.20987C18.4442 1.54688 16.2043 0.503525 13.7146 0.503525ZM25.7588 20.0157C25.6629 19.9303 25.5688 19.8426 25.4766 19.7527L20 14.4097L14.5234 19.7527C14.4312 19.8426 14.3371 19.9303 14.2412 20.0157C14.3371 20.1011 14.4312 20.1888 14.5234 20.2787L20 25.6218L25.4766 20.2787C25.5688 20.1888 25.6629 20.1011 25.7588 20.0157ZM22.2222 29.5859V31.2278C22.2222 33.4171 24.0414 35.1919 26.2854 35.1919C27.363 35.1919 28.3965 34.7742 29.1585 34.0308L35.5556 27.7898V26.1478C35.5556 23.9585 33.7364 22.1837 31.4924 22.1837C30.4148 22.1837 29.3813 22.6014 28.6193 23.3448L22.2222 29.5859ZM17.7778 29.5859L11.3807 23.3448C10.6187 22.6014 9.58524 22.1837 8.50762 22.1837C6.26359 22.1837 4.44444 23.9585 4.44444 26.1478V27.7898L10.8415 34.0308C11.6035 34.7742 12.637 35.1919 13.7146 35.1919C15.9586 35.1919 17.7778 33.4171 17.7778 31.2278V29.5859ZM17.7778 8.80364V10.4456L11.3807 16.6866C10.6187 17.43 9.58524 17.8477 8.50762 17.8477C6.26359 17.8477 4.44444 16.0729 4.44444 13.8836V12.2417L10.8415 6.00061C11.6035 5.25721 12.637 4.83957 13.7146 4.83957C15.9586 4.83957 17.7778 6.61434 17.7778 8.80364ZM28.6193 16.6866L22.2222 10.4456V8.80364C22.2222 6.61434 24.0414 4.83957 26.2854 4.83957C27.363 4.83957 28.3965 5.25721 29.1585 6.00061L35.5556 12.2417V13.8836C35.5556 16.0729 33.7364 17.8477 31.4924 17.8477C30.4148 17.8477 29.3813 17.43 28.6193 16.6866Z"
            fill="#FF630B"
          />
        </svg>

        <h3 class="font-aspec text-[24px]">Rasa Nusa</h3>
      </div>

      <ul class="flex gap-[36px] items-center text-[#2B2B2B99] font-cabinet">
        <li
          class="hover:bg-[#C1442E] py-3 px-4 rounded-[12px] transition-all duration-500 ease-in-out hover:text-white"
        >
          Beranda
        </li>
        <li
          class="hover:bg-[#C1442E] py-3 px-4 rounded-[12px] transition-all duration-500 ease-in-out hover:text-white"
        >
          Menu
        </li>
        <li
          class="hover:bg-[#C1442E] py-3 px-4 rounded-[12px] transition-all duration-500 ease-in-out hover:text-white"
        >
          Tentang Kami
        </li>
        <li
          class="hover:bg-[#C1442E] py-3 px-4 rounded-[12px] transition-all duration-500 ease-in-out hover:text-white"
        >
          Promo
        </li>
        <li
          class="hover:bg-[#C1442E] py-3 px-4 rounded-[12px] transition-all duration-500 ease-in-out hover:text-white"
        >
          Kontak/Reservasi
        </li>
      </ul>

      <div class="flex gap-[17px] h-full items-center">
        <div class="flex gap-2">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
              stroke="#2B2B2B"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M22 22L20 20"
              stroke="#2B2B2B"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
        <div class="flex gap-2">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <mask
              id="mask0_345_60"
              style="mask-type: luminance"
              maskUnits="userSpaceOnUse"
              x="0"
              y="0"
              width="24"
              height="24"
            >
              <path d="M24 0H0V24H24V0Z" fill="white" />
            </mask>
            <g mask="url(#mask0_345_60)">
              <path
                d="M2 2H3.74001C4.82001 2 5.67 2.93 5.58 4L4.75 13.96C4.61 15.59 5.89999 16.99 7.53999 16.99H18.19C19.63 16.99 20.89 15.81 21 14.38L21.54 6.88C21.66 5.22 20.4 3.87 18.73 3.87H5.82001"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M16.25 22C16.9404 22 17.5 21.4404 17.5 20.75C17.5 20.0596 16.9404 19.5 16.25 19.5C15.5596 19.5 15 20.0596 15 20.75C15 21.4404 15.5596 22 16.25 22Z"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M8.25 22C8.94036 22 9.5 21.4404 9.5 20.75C9.5 20.0596 8.94036 19.5 8.25 19.5C7.55964 19.5 7 20.0596 7 20.75C7 21.4404 7.55964 22 8.25 22Z"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M9 8H21"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
          </svg>
        </div>
        <div class="flex gap-2">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <mask
              id="mask0_345_74"
              style="mask-type: luminance"
              maskUnits="userSpaceOnUse"
              x="0"
              y="0"
              width="24"
              height="24"
            >
              <path d="M24 0H0V24H24V0Z" fill="white" />
            </mask>
            <g mask="url(#mask0_345_74)">
              <path
                d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M20.5901 22C20.5901 18.13 16.7402 15 12.0002 15C7.26015 15 3.41016 18.13 3.41016 22"
                stroke="#2B2B2B"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
          </svg>
        </div>
      </div>
    </nav>
  </header>
</nav>
