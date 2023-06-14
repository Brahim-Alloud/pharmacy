<x-app-layout>
    <div class="mt-3 w-3/4 mx-auto bg-white rounded-md p-4">
        <a href="{{route('pharmacie.create')}}" class="py-2 block w-52 my-4 px-4 bg-green-500 hover:bg-green-600 transition text-white rounded-md">Ajouter un pharmacie</a>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
              <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                  <thead>
                    <tr>
                      <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Nom Pharmacie</th>
                      <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Telephone</th>
                      <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Adresse</th>
                      <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Ville</th>
                      <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                        Operations</th>
                    </tr>
                  </thead>
        
                  <tbody class="bg-white">
                    @forelse($pharmacies as $pharmacie)
                    <tr>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                          {{$pharmacie->nom}}
                        </div>
        
                      </td>
        
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">{{$pharmacie->telephone}}
                        </div>
                      </td>
        
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <p>{{$pharmacie->adresse}}</p>
                      </td>
        
                      <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span>{{$pharmacie->ville}}</span>
                      </td>
        
                      <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{route("pharmacie.edit",$pharmacie->id)}}" class="text-indigo-600 hover:text-indigo-900">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                        </a>
        
                      <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{route("pharmacie.show",$pharmacie->id)}}" class="text-gray-600 hover:text-gray-900">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
                        </a>
        
                      </td>
        
                      </td>
                      <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                        <form action="{{route("pharmacie.destroy",$pharmacie->id)}}" method="post" class="d-inline delete" >
                            @csrf
                            @method("DELETE")
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger  show_confirm" title='Delete' ><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg></button>                                    
                        </form>
        
                      </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">vide....!</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>

    <script>
      const btnsSupp = document.querySelectorAll('.delete');
      btnsSupp.forEach(btn => {
        btn.addEventListener('submit', (e) => {
          if (!confirm('Etes-vous sûr vouloir supprimer ce enregisterment !')) {
            e.preventDefault();
          }
        });
      })
    </script>
</x-app-layout>