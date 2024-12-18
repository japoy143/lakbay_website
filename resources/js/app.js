import "./bootstrap";
import "preline";
document.addEventListener("livewire:navigated", () => {
    window.HSStaticMethods.autoInit();
}); // use this when using wire:navigate
