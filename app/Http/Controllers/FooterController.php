<?php

namespace App\Http\Controllers;

use App\Helpers\S3;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends BaseController
{
    private function validateData(Request $request): array
    {
        return $request->validate([
            'title_en' => ['required', 'string'],
            'title_es' => ['nullable', 'string'],
            'subtitle_en' => ['nullable', 'string'],
            'subtitle_es' => ['nullable', 'string'],

            // FIX: allow string (existing path) OR file
            'image_url' => ['nullable'],

            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
        ]);
    }

    /**
     * Show the footer editor (single record)
     */
    public function index()
    {
        $footer = Footer::first();

        return view('admin.footer.form', compact('footer'));
    }

    /**
     * Store or Update Footer (single record logic)
     */
    public function save(Request $request)
    {
        $data = $this->validateData($request);

        try {
            $footer = Footer::first();

            if ($request->hasFile('image_url')) {
                $data['image_url'] = S3::uploadImageAsWebpPreset(
                    $request->file('image_url'),
                    'footers',
                    'cover',
                    1600,
                    600,
                    85
                );
            } else {
                unset($data['image_url']);
            }

            if ($footer) {
                $footer->update($data);
            } else {
                $footer = Footer::create($data);
            }

            return redirect()
                ->route('footer.index')
                ->with('success', 'Footer saved successfully.');

        } catch (\Throwable $e) {

            dd([
                'REAL_ERROR' => $e->getMessage(),
                'DATA' => $data,
            ]);
        }
    }

    /**
     * Validation logic
     */
}
