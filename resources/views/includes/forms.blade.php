<form method="POST" action="{{ route('create') }}">

    {{-- Personal Information --}}

    <div class="container bg-light p-4 m-4 rounded">
        @csrf
        <fieldset>
            <legend>1. Your position in the Trust University Barishal (TUB) -</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="type" value="academic">
                <label class="form-check-label" for="type">
                    Academic
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="type2" value="non-academic"
                    checked>
                <label class="form-check-label" for="type2">
                    Non-Academic
                </label>
            </div>
            <div class="mt-3 mb-3">
                <div class="input-group">
                    <span class="input-group-text">Name<span class="text-danger">*</span></span>
                    <input value="{{ old('name') }}" type="text" name="name" class="form-control">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger mt-3">Name is required & much be more than 3 characters</div>
                @endif

            </div>
            <div class="mt-3 mb-3">
                <div class="input-group">
                    <span class="input-group-text">Contact<span class="text-danger">*</span></span>
                    <input value="{{ old('contact') }}" type="text" name="contact" class="form-control">
                </div>
                @if ($errors->has('contact'))
                    <div class="alert alert-danger mt-3">Contact number is required & must be 11 digit</div>
                @endif
            </div>
        </fieldset>

    </div>

    {{-- Strengths --}}

    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>2. What are the Strengths of the TUB?
                Please write 4 (Four) points numbering as a. b. c. d.</legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('strength-a') }}" type="text" class="form-control" name="strength-a"
                    placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('strength-b') }}" type="text" class="form-control" name="strength-b"
                    placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('strength-c') }}" type="text" class="form-control" name="strength-c"
                    placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('strength-d') }}" type="text" class="form-control" name="strength-d"
                    placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    {{-- Strengths outcome --}}
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>3. How these strengths can be used for a better outcome? </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('strength-outcome-a') }}" type="text" class="form-control"
                    name="strength-outcome-a" placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('strength-outcome-b') }}" type="text" class="form-control"
                    name="strength-outcome-b" placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('strength-outcome-c') }}" type="text" class="form-control"
                    name="strength-outcome-c" placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('strength-outcome-d') }}" type="text" class="form-control"
                    name="strength-outcome-d" placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    {{-- Weakness --}}
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>4. What are the Weaknesses of the TUB?</legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('weakness-a') }}" type="text" class="form-control" name="weakness-a"
                    placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('weakness-b') }}" type="text" class="form-control" name="weakness-b"
                    placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('weakness-c') }}" type="text" class="form-control" name="weakness-c"
                    placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('weakness-d') }}" type="text" class="form-control" name="weakness-d"
                    placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>

    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>5. How these weaknesses can be overcome? </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('weakness-overcome-a') }}" type="text" class="form-control"
                    name="weakness-overcome-a" placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('weakness-overcome-b') }}" type="text" class="form-control"
                    name="weakness-overcome-b" placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('weakness-overcome-c') }}" type="text" class="form-control"
                    name="weakness-overcome-c" placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('weakness-overcome-d') }}" type="text" class="form-control"
                    name="weakness-overcome-d" placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>


    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>6. What are the Opportunities that comes from the external factors in favour of TUB? </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('opportunities-a') }}" type="text" class="form-control"
                    name="opportunities-a" placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('opportunities-b') }}" type="text" class="form-control"
                    name="opportunities-b" placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('opportunities-c') }}" type="text" class="form-control"
                    name="opportunities-c" placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('opportunities-d') }}" type="text" class="form-control"
                    name="opportunities-d" placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>7. How these opportunities can be utilize for better result?
            </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('opportunities-utilize-a') }}" type="text" class="form-control"
                    name="opportunities-utilize-a" placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('opportunities-utilize-b') }}" type="text" class="form-control"
                    name="opportunities-utilize-b" placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('opportunities-utilize-c') }}" type="text" class="form-control"
                    name="opportunities-utilize-c" placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('opportunities-utilize-d') }}" type="text" class="form-control"
                    name="opportunities-utilize-d" placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>8. What are the Threats that TUB are facing or would face from external factors that affects its
                progress? </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('threats-a') }}" type="text" class="form-control" name="threats-a"
                    placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('threats-b') }}" type="text" class="form-control" name="threats-b"
                    placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('threats-c') }}" type="text" class="form-control" name="threats-c"
                    placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('threats-d') }}" type="text" class="form-control" name="threats-d"
                    placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>9. How these threats can be minimized? </legend>
            <div class="input-group mb-3">
                <span class="input-group-text">A</span>
                <input value="{{ old('threats-minimized-a') }}" type="text" class="form-control"
                    name="threats-minimized-a" placeholder="Input first point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">B</span>
                <input value="{{ old('threats-minimized-b') }}" type="text" class="form-control"
                    name="threats-minimized-b" placeholder="Input second point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">C</span>
                <input value="{{ old('threats-minimized-c') }}" type="text" class="form-control"
                    name="threats-minimized-c" placeholder="Input third point here....">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">D</span>
                <input value="{{ old('threats-minimized-d') }}" type="text" class="form-control"
                    name="threats-minimized-d" placeholder="Input fourth point here....">
            </div>
        </fieldset>
    </div>
    <div class="container bg-light p-4 m-4 rounded">
        <fieldset>
            <legend>10. If you have an other comments please write down.
            </legend>
            <div class="form-group">

                <textarea class="form-control" rows="4" name="comments" placeholder="please write your comments here.....">{{ old('comments') }}</textarea>
            </div>
        </fieldset>
    </div>
    <div class="container d-flex justify-content-center bg-light p-4 m-4 rounded">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
