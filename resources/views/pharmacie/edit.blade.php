<x-app-layout>
    <div class="container mx-10 py-10">
        <form action={{ route('pharmacie.update',$pharmacie->id)}} method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                          <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                              <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Télécharger un fichier</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">glisser ou deposer</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF jusqu'à 10MB</p>
                          </div>
                          <x-input-error :messages="$errors->get('file-upload')" class="mt-2" />
                        </div>
                      </div>
                  <div class="sm:col-span-3">
                    <label for="nom" class="block text-sm font-medium leading-6 text-gray-900">Nom de Pharmacie :</label>
                    <div class="mt-2">
                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="text" name="nom" value={{$pharmacie->nom}} id="nom" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Pharmacie .....">
                      </div>
                    </div>

                  </div>

                  <div class="sm:col-span-3">
                    <label for="adresse" class="block text-sm font-medium leading-6 text-gray-900">Adresse :</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="adresse" id="adresse" value={{$pharmacie->adresse}} class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Entrez l'adresse de pharmacie">
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                  </div>

                  <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email :</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="email" id="email" value={{$pharmacie->email}} class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Entrez l'adresse de pharmacie">
                        </div>
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="telephone" class="block text-sm font-medium leading-6 text-gray-900">Telephone :</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="telephone" id="telephone" value={{$pharmacie->telephone}} class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Entrez l'adresse de pharmacie">
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                  </div>
                  <div class="sm:col-span-3">
                    <label for="ville" class="block text-sm font-medium leading-6 text-gray-900">Ville :</label>
                    <div class="mt-2">
                            <select id="ville" name="ville" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="ouarzazate"  @selected($pharmacie->ville == "ouarzazate")>Ouarzazate</option>
                                <option value="zagora" @selected($pharmacie->ville == "zagora")>Zagora</option>
                            </select>
                    </div>
                    <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                  </div>
                  <div class="sm:col-span-3">
                    <label for="ville" class="block text-sm font-medium leading-6 text-gray-900">Semaine Permanante :</label>
                    <div class="mt-2">
                        <input type="week" name="semaine_travail_fs" value={{$pharmacie->semaine_travail_fs}} id="semaine_travail_fs" value={{$pharmacie->semaine_travail_fs}} class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('semaine_travail_fs')" class="mt-2" />
                  </div>
                </div>
              </div>
              <div class="border-b border-gray-900/10 pb-12">
                <h2 class="font-bold text-xl leading-7 text-gray-900">Horaire de travail a la semaine :</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="heure_matin_ts_debut" class="block text-sm font-medium leading-6 text-gray-900">Heure d'ouverture matin :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_matin_ts_debut" value={{$pharmacie->heure_matin_ts_debut}} id="heure_matin_ts_debut" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('heure_matin_ts_debut')" class="mt-2" />
                  </div>

                  <div class="sm:col-span-3">
                    <label for="heure_matin_ts_fin" class="block text-sm font-medium leading-6 text-gray-900">Heure de fermeture matin :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_matin_ts_fin" value={{$pharmacie->heure_matin_ts_fin}} id="heure_matin_ts_fin" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="heure_soir_ts_debut" class="block text-sm font-medium leading-6 text-gray-900">Heure d'ouverture soir :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_soir_ts_debut" value={{$pharmacie->heure_soir_ts_debut}} id="heure_soir_ts_debut" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('heure_soir_ts_debut')" class="mt-2" />
                  </div>

                  <div class="sm:col-span-3">
                    <label for="heure_soir_ts_fin" class="block text-sm font-medium leading-6 text-gray-900">Heure de fermeture soir :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_soir_ts_fin" value={{$pharmacie->heure_soir_ts_fin}} id="heure_soir_ts_fin" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('heure_soir_ts_fin')" class="mt-2" />
                  </div>
                </div>
                <h2 class="font-bold text-xl mt-4 leading-7 text-gray-900">Horaire de travail a samedi :</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="heure_soir_fs_debut" class="block text-sm font-medium leading-6 text-gray-900">Heure d'ouverture soir :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_soir_fs_debut" value={{$pharmacie->heure_soir_fs_debut}} id="heure_soir_fs_debut" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('heure_soir_fs_debut')" class="mt-2" />
                  </div>

                  <div class="sm:col-span-3">
                    <label for="heure_soir_fs_fin" class="block text-sm font-medium leading-6 text-gray-900">Heure de fermeture soir :</label>
                    <div class="mt-2">
                      <input type="time" name="heure_soir_fs_fin" value={{$pharmacie->heure_soir_fs_fin}}  id="heure_soir_fs_fin" class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('heure_soir_fs_fin')" class="mt-2" />
                  </div>

                </div>
                @if($errors->any())
                        <div class="text-red-800">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
              </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Annuler</button>
              <button type="submit" class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enregistrer</button>
            </div>
        </form>

    </div>
</x-app-layout>
