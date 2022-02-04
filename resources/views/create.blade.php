<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
            >Example label</label
          >

        </div>

        <div class="flex justify-center">
            <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
              <div class="py-3 px-6 border-b border-gray-700">
                Featured
              </div>
              <div class="p-6">
                <input
                type="text"
                class="
                  form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="exampleFormControlInput1"
                placeholder="Example label"
              />
              <br>
              <input
              type="text"
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="exampleFormControlInput1"
              placeholder="Example label"
            />
            <br><input
            type="text"
            class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
            id="exampleFormControlInput1"
            placeholder="Example label"
          />
              </div>
              <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                2 days ago
                <button type="button" class="" style="background-color: blue borde; ">Primary</button>
              </div>
            </div>

          </div>

</x-app-layout>
