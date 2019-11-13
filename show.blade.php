@extends('layouts.layout')

@section('subNav')
  <li><a href="/">Back to forms</a></li>
@endsection

@section('contentBody')
<h1>Drama</h1>
<p>Please ensure that this form is completed by July 1st, as it may be difficult to timetable late requests for extras.</p>
<p>Before requesting additional paid extras, please make sure you have read the relevant departmental information which includes costs and our cessation policy.</p>
<div>
    <div id="drama">
        <dramaform v-bind:student-id="{{ $student_id }}"></dramaform>
    </div>
    
</div>

@endsection

<script type="text/javascript">      
  window.csrf_token = "{{ csrf_token() }}"
</script>

    {{-- 
    <form method="post" action="/student/{{ $student_id }}/drama" name="dramaform" id="dramaform" >
        @csrf
        @include('layouts.errors')
        <input class="button" type="submit" name="action" value="Not Applicable"/>
        <hr/>
        <fieldset>
          <label for="LessonType">Lesson Type:</label>
            @if ($errors->has('LessonType'))
                {!! $errors->first('LessonType', '<p class=errors>*:message</p>') !!}
            @endif
            @if(!(Request::old('LessonType') ?? $drama['LessonType']))
            <select name="LessonType" id="LessonType"  >
                <option value="">Select ...</option>
                <option value="Acting - Solo">Acting - Solo</option>
                <option value="Acting - Paired">Acting - Paired</option>
                <option value="Acting - Group">Acting - Group</option>
                <option value="Musical Theatre - Solo">Musical Theatre - Solo</option>
                <option value="Musical Theatre - Paired">Musical Theatre - Paired</option>
                <option value="Musical Theatre - Group">Musical Theatre - Group</option>
                <option value="Non-acting performance disciplines - Solo only">Non-acting performance disciplines - Solo only</option>
            </select>
            @else
            <select name="LessonType" id="LessonType"  >
                <option value="{{ Request::old('LessonType') ?? $drama['LessonType'] }}">{{ Request::old('LessonType') ?? $drama['LessonType'] }}</option>
                <option value="Acting - Solo">Acting - Solo</option>
                <option value="Acting - Paired">Acting - Paired</option>
                <option value="Acting - Group">Acting - Group</option>
                <option value="Musical Theatre - Solo">Musical Theatre - Solo</option>
                <option value="Musical Theatre - Paired">Musical Theatre - Paired</option>
                <option value="Musical Theatre - Group">Musical Theatre - Group</option>
                <option value="Non-acting performance disciplines - Solo only">Non-acting performance disciplines - Solo only</option>
            </select>
            @endif 

            <label for="MinGroupNumber">If you have selected a Group activity please stipulate min group number:</label>
            @if ($errors->has('MinGroupNumber'))
                {!! $errors->first('MinGroupNumber', '<p class=errors>*:message</p>') !!}
            @endif
            @if(!(Request::old('MinGroupNumber') ?? $drama['MinGroupNumber']))
            <select name="MinGroupNumber" id="MinGroupNumber"  >
                <option value="">Select ...</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            @else
            <select name="MinGroupNumber" id="MinGroupNumber"  >
                <option value="{{ Request::old('MinGroupNumber') ?? $drama['MinGroupNumber'] }}">{{ Request::old('MinGroupNumber') ?? $drama['MinGroupNumber'] }}</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            @endif

            <label for="LamdaGrading">Previous Lamda grading:</label>
            @if ($errors->has('LamdaGrading'))
                {!! $errors->first('LamdaGrading', '<p class=errors>*:message</p>') !!}
            @endif
            @if(!(Request::old('LamdaGrading') ?? $drama['LamdaGrading']))
            <select name="LamdaGrading" id="LamdaGrading"  >
                <option value="">Select ...</option>
                <option value="None">None</option>
                <option value="Entry level 1">Entry level 1</option>
                <option value="Entry level 2">Entry level 2</option>
                <option value="Entry level 3">Entry level 3</option>
                <option value="Grade 1">Grade 1</option>
                <option value="Grade 2">Grade 2</option>
                <option value="Grade 3">Grade 3</option>
                <option value="Grade 4">Grade 4</option>
                <option value="Grade 5">Grade 5</option>
                <option value="Grade 6">Grade 6</option>
                <option value="Grade 7">Grade 7</option>
                <option value="Grade 8">Grade 8</option>
                <option value="Other Exam Board">Other Exam Board</option>
            </select>
            @else
            <select name="LamdaGrading" id="LamdaGrading"  >
                <option value="{{ Request::old('LamdaGrading') ?? $drama['LamdaGrading'] }}">{{ Request::old('LamdaGrading') ?? $drama['LamdaGrading'] }}</option>
                <option value="None">None</option>
                <option value="Entry level 1">Entry level 1</option>
                <option value="Entry level 2">Entry level 2</option>
                <option value="Entry level 3">Entry level 3</option>
                <option value="Grade 1">Grade 1</option>
                <option value="Grade 2">Grade 2</option>
                <option value="Grade 3">Grade 3</option>
                <option value="Grade 4">Grade 4</option>
                <option value="Grade 5">Grade 5</option>
                <option value="Grade 6">Grade 6</option>
                <option value="Grade 7">Grade 7</option>
                <option value="Grade 8">Grade 8</option>
                <option value="Other Exam Board">Other Exam Board</option>
            </select>
            @endif

            <label for="Details">If other please give details:</label>
            @if ($errors->has('Details'))
                {!! $errors->first('Details', '<p class=errors>*:message</p>') !!}
            @endif
            <textarea rows="8" name="Details" id="Details"></textarea>
            <p>Lessons are timetabled within academic timetable constraints. A waiting list may be in operation, depending on demand.</p>
        </fieldset>
        <input class="button" type="submit" name="action" value="Save & Do later"/>
        <input class="button" type="submit" name="action" value="Completed"/>
        <input class="button" type="submit" name="action" value="Back to Forms"/>
    </form>
    
</div>

@endsection
--}}