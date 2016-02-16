<?php

namespace Api\Transformers;

use App\Wydatek;
use League\Fractal\TransformerAbstract;

class WydatkiTransformer extends TransformerAbstract
{
	public function transform(Wydatek $wydatek)
	{
		return [
			'id' 	=> (int) $wydatek->id,
			'zaco'  => $wydatek->zaco,
			'confirmed' => (bool) $wydatek->confirmed,
			'dokiedy' => $wydatek->dokiedy,
			'tag' => $wydatek->tag,
			'kwota' => (float) $wydatek->kwota,
			'styczen'	=> (float) $wydatek->styczen,
			'luty'	=> (float) $wydatek->luty,
			'marzec'	=> (float) $wydatek->marzec,
			'kwiecien' => (float) $wydatek->kwiecien,
			'maj' => (float) $wydatek->maj,
			'czerwiec' => (float) $wydatek->czerwiec,
			'lipiec' => (float) $wydatek->lipiec,
			'sierpien' => (float) $wydatek->sierpien,
			'wrzesien' => (float) $wydatek->wrzesien,
			'pazdziernik' => (float) $wydatek->pazdziernik,
			'listopad' => (float) $wydatek->listopad,
			'grudzien' => (float) $wydatek->grudzien
		];
	}
}
