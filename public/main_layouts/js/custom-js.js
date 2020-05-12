var i = 0,
    newBlock = '<div class="block"></div>',
    $blockContainer = $(".blocks");

for(i=0; i < 150; i++) {
    $blockContainer.append(newBlock);
}
