# Filament Structure Plan - Hero Academy

## 1. User Management (UserResource)
**Goal:** Manage Admins, Teachers, and Students.
- **Fields:**
    - `name` (TextInput, required)
    - `email` (TextInput, email, unique)
    - `password` (TextInput, hidden on edit)
    - `role` (Select: `admin`, `teacher`, `student`) - *Consider using Spatie Permission if robust roles needed.*
    - `avatar` (FileUpload, circular)
- **Table Columns:** `name`, `email`, `role` (Badge), `created_at`.
- **Filters:** Role.

## 2. Course Management (CourseResource)
**Goal:** Manage curriculum and content.
- **Fields:**
    - `title` (TextInput)
    - `slug` (TextInput, auto-generate)
    - `description` (RichEditor)
    - `thumbnail` (FileUpload)
    - `price` (TextInput, numeric, prefix 'Rp')
    - `teacher_id` (Select: Users where role=teacher)
    - `status` (Toggle/Select: Draft, Published)
- **Relations:**
    - `RelationManager: Modules` (HasMany)
        - `title`, `order`
        - `content` (Builder: `video_url`, `text_block`, `quiz_block`)

## 3. Hero AI / Assessments (AssessmentResource)
**Goal:** Configure the AI tests (SWOT, VAK, RIASEC).
- **Fields:**
    - `title` (TextInput, e.g., "VAK Learning Style Test")
    - `type` (Select: `vak`, `swot`, `riasec`, `general`)
    - `description` (Textarea)
    - `questions` (Repeater)
        - `question_text` (TextInput)
        - `options` (Repeater: `text`, `score_value`, `category_mapping`)
- **Relations:** 
    - `RelationManager: Results` (HasMany) - *View student results for this assessment.*

## 4. Assessment Results (AssessmentResultResource)
**Goal:** View student scores and AI generated insights.
- **Fields:**
    - `user_id` (BelongsTo Student)
    - `assessment_id` (BelongsTo Assessment)
    - `score_data` (KeyValue or JSON View) - *Stores the raw scores.*
    - `ai_summary` (Markdown/Textarea) - *The generated insight.*
- **Actions:**
    - `Generate Insight via AI` (Action button to trigger external AI service).

## 5. Dashboard Widgets
- **StatsOverview:** Total Students, Active Courses, Revenue.
- **LatestRegistrations:** Table widget.
- **AssessmentCompletionChart:** Chart widget showing test completions.
