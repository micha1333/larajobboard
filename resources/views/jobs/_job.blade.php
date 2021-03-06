<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">

    <div class="col-md-2">
        <a href="job-single.html">
            <img src="/images/featured-listing-1.jpg" alt="Image"
                 class="img-fluid">
        </a>
    </div>

    <div class="col-md-4">
        @php
            $badge = "badge-primary";
            if($job->job_type == 'full_time')
               $badge = "badge-warning";
           elseif($job->job_type == 'part_time')
               $badge = "badge-success";
        @endphp
        <span class="badge {{ $badge }} px-2 py-1 mb-3">{{ ucfirst(str_replace('-',' ',$job->type)) }}</span>
        <h2><a href="/jobs/{{ $job->id }}">{{ $job->title }}</a></h2>
        <p class="meta">Publisher: <strong>{{ $job->user->name }}</strong> In:
            <strong>{{ ucfirst($job->category->name) }}</strong></p>
    </div>

    <div class="col-md-3 text-left">
        <h3>{{ ucfirst($job->city_name) }}</h3>
        <span class="meta">{{ strtoupper($job->country_name) }}</span>
    </div>

    <div class="col-md-3 text-md-right">
        <strong class="text-black">{{ $job->min_max_salary }}</strong>
    </div>
</div>