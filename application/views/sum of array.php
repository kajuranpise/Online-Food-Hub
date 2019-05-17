

play_arrow

brightness_4
<?php 
// A simple program to print subarray 
// with sum as given sum  
  
/* Returns true if the there is 
   a subarray of arr[] with  
   sum equal to 'sum' 
   otherwise returns false.  
   Also, prints the result */
function subArraySum($arr, $n, $sum) 
{ 
    $curr_sum; $i; $j; 
  
    // Pick a starting point 
    for ($i = 0; $i < $n; $i++) 
    { 
        $curr_sum = $arr[$i]; 
  
        // try all subarrays  
        // starting with 'i' 
        for ($j = $i + 1; $j <= $n; $j++) 
        { 
            if ($curr_sum == $sum) 
            { 
                echo "Sum found between indexes " 
                      ,$i ," and " ,$j-1 ; 
                return 1; 
            } 
            if ($curr_sum > $sum || $j == $n) 
                break; 
        $curr_sum = $curr_sum + $arr[$j]; 
        } 
    } 
  
    echo "No subarray found"; 
    return 0; 
} 
  
    // Driver Code 
    $arr= array(15, 2, 4, 8, 9, 5, 10, 23); 
    $n = sizeof($arr); 
    $sum = 23; 
    subArraySum($arr, $n, $sum); 
    return 0; 
      
// This code is contributed by AJit 
?> 
