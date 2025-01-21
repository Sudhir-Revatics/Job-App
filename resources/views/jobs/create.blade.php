<x-layout>
    <x-page-heading>
        Create Job
    </x-page-heading>
    <x-forms.form method="post" action="/jobs">
        <x-forms.input label="Title" name="title" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="San Francisco, CA"/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com/careers/jobs"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, php, javascript"/>
        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
