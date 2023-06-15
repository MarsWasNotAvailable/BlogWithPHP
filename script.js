
function GetCurrentStyleOf(Element)
{
    return Element.currentStyle ? Element.currentStyle.display : getComputedStyle(Element, null).display;
}

// Scope
{
    let HamburgerButton = document.getElementById('HamburgerButton');

    if (GetCurrentStyleOf(HamburgerButton) === "flex")
    {
        document.getElementById("HamLinks").className = "Collapsed";
    }
}

function ToggleHamburger(){
    let HamLinks = document.getElementById('HamLinks');

    if (HamLinks.className === "Visible")
    {
        HamLinks.className = "Collapsed";
    }
    else
    {
        HamLinks.className = "Visible";
    }
}
