<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a href="{{route('customer.cart')}}">Add New</a> </button>
        </h2>
    </x-slot>
        <div class="flex justify-center">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-50">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                              Id de la carte
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                              CVC
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                firstname
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                lastname
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                sex
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                date_naissance
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                cartNumber
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                month
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                year
                              </th>
                              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                action
                              </th>
                          </tr>
                        </thead class="border-b">
                        <tbody >
                            @foreach($customer as $customers)
                          <tr class="bg-white border-b">

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$customers->id}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->cvc}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->firstname}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->lastname}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->sex}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->date_naissance}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->cartNumber}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->month}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $customers->year}}

                            </td>
                            <td>

                              <button type="button" class="inline-block px-6 py-2 border-2 border-blue-400 text-blue-400 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"><a href="">Edit</a> </button>
                              <button type="button" class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"  @click="deleteCustomer(customer.id)">Delete</button>
                            </td>

                        </tr class="bg-white border-b">
                        @endforeach
                        </tbody  >
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
</x-app-layout>
