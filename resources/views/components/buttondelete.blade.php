<input class="bg-red-400 py-1 px-2 mt-2 font-semibold hover:bg-red-300 rounded shadow" 
type="submit" onclick="return confirm('Desea eliminar')" {{ $attributes->merge(['value' => 'Eliminar']) }}>