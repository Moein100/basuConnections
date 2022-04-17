<div>
    {{-- The Master doesn't talk, he acts. --}}
    <x-modal-confirm
        livewireEventToOpenModal="deleteCommentWasSet"
        eventToCloseModal="commentWasDeleted"
        modalTitle="Delete Comment"
        modaldescription="Are you sure you want to delete the Comment? this action cannot be undone"
        modalConfirmButtonText="Delete"
        wireClick="deleteComment"
    />

</div>
