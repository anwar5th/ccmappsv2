<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SPK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
    <div>
        <h3 class="text-lg font-semibold text-slate-800">Purchase Order / Data - data proyek</h3>
        <button
        data-dialog-target="dialog"
          class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z" />
                <path d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z" />
            </svg>
          Tambah Data Proyek
        </button>
<!-- test -->
    </div>
    <div class="ml-3">
        <div class="w-full max-w-sm min-w-[200px] relative">
        <div class="relative">
            <input
            class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Search for invoice..."
            />
            <button
            class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
            type="button"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            </button>
        </div>
        </div>
    </div>
</div>
 
<div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
  <table class="w-full text-left table-auto min-w-max">
    <thead>
      <tr>
        <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
            Kode PO
          </p>
        </th>
        <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
            Nama Proyek
          </p>
        </th>
        <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
            Tanggal Turun PO
          </p>
        </th>
        <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
            List SPK
          </p>
        </th>
        <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
            Edit Data
          </p>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr class="hover:bg-slate-50 border-b border-slate-200">
        <td class="p-4 py-5">
          <p class="block font-semibold text-sm text-slate-800">PROJ1001</p>
        </td>
        <td class="p-4 py-5">
          <p class="text-sm text-slate-500">John Doe</p>
        </td>
        <td class="p-4 py-5">
          <p class="text-sm text-slate-500">$1,200.00</p>
        </td>
        <td class="p-4 py-5">
        <button
          class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button">
          Lihat
        </button>
        </td>
        <td class="p-4 py-5">
          <p class="text-sm text-slate-500">2024-08-15</p>
        </td>
      </tr>
    </tbody>
  </table>
 
  <div class="flex justify-between items-center px-4 py-3">
    <div class="text-sm text-slate-500">
      Showing <b>1-5</b> of 45
    </div>
    <div class="flex space-x-1">
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
        Prev
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-white bg-slate-800 border border-slate-800 rounded hover:bg-slate-600 hover:border-slate-600 transition duration-200 ease">
        1
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
        2
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
        3
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
        Next
      </button>
    </div>
  </div>
</div>
 
<!-- isian baru -->
    <!-- <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true" class="absolute left-0 top-0 inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
    <div data-dialog="dialog"
      class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-slate-700 shadow-md">
      <div class="flex flex-col p-6">
        <h4
          class="text-2xl mb-1 font-semibold text-slate-700">
          Edit Member Details
        </h4>
        <p class="mb-3 mt-1 text-slate-400">
          Enter or reset each information for the member access.
        </p>
       
       <div class="w-full max-w-sm min-w-[200px] mt-4">
        <label class="block mb-1 text-sm text-slate-700">
           Member Name
        </label>
        <input
            type="text"
            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Enter your text" />
        </div>
        <div class="w-full max-w-sm min-w-[200px] mt-4">
        <label class="block mb-1 text-sm text-slate-700">
            Member Email
        </label>
        <input
            type="text"
            class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Enter the email" />
        </div>
        <div class="w-full max-w-sm min-w-[200px] mt-4">
            <label class="block mb-1 text-sm text-slate-700">
                Job
            </label>
            <input
                type="text"
                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                placeholder="Enter the job" />
        </div>
        <div class="w-full max-w-sm min-w-[200px] mt-4">
            <label class="block mb-1 text-sm text-slate-700">
                Active Status
            </label>
            <input
                type="text"
                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                placeholder="Offline/Online" />
        </div>
        
      </div>
      <div class="p-6 pt-0">
        <div class="flex space-x-2">
            <button
                data-dialog-close="true"
                class="w-full mx-auto select-none rounded border border-red-600 py-2 px-4 text-center text-sm font-semibold text-red-600 transition-all hover:bg-red-600 hover:text-white hover:shadow-md hover:shadow-red-600/20 active:bg-red-700 active:text-white active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
                >
                Cancel
            </button>
 
            <button
                class="w-full mx-auto select-none rounded bg-slate-800 py-2 px-4 text-center text-sm font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
                data-dialog-close="false">
                Save
            </button>
        </div>
        <p class="flex justify-center mt-4 font-sans text-sm text-slate-500">
          Looking for more details? Contact
          <a href="#admin"
            class="ml-1 text-sm font-bold leading-normal text-slate-500">
            Admin.
          </a>
        </p>
      </div>
    </div>
    </div>   -->
<!-- isian baru -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
