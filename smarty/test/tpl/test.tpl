{$articletitle}

{$arr['articlecontent']['title']}
{$arr['articlecontent']['author']}

{$testa|capitalize}
{$testa|cat:" yesterday"}
{$time|date_format:"%H:%M:%S"}
{$emptya|default:"no title"}

<br/>

{if $score gt 90}
nice
{elseif $score gt 60}
not bad
{else}
bad
{/if}








