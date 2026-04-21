<?php
$reviews = [
  [
    'user_name' => "Puneeth Gupta",
    'service_ordered' => 'Foam-jet AC service',
    'rating' => '4.5',
    'review_content' => 'I had got all my 5 AC serviced in one go. Superb cleanliness and no rush. Highly recommended 👍'
  ],
  [
    'user_name' => "Rahul Sharma",
    'service_ordered' => 'Split AC installation',
    'rating' => '5.0',
    'review_content' => 'Very professional and quick installation. Explained everything clearly.'
  ],
  [
    'user_name' => "Ankit Verma",
    'service_ordered' => 'Window AC repair',
    'rating' => '4.0',
    'review_content' => 'Good service, fixed cooling issue in one visit.'
  ],
  [
    'user_name' => "Sneha Iyer",
    'service_ordered' => 'AC gas refill',
    'rating' => '4.8',
    'review_content' => 'Cooling improved instantly. Technician was polite and punctual.'
  ],
  [
    'user_name' => "Karan Mehta",
    'service_ordered' => 'Foam AC cleaning',
    'rating' => '4.2',
    'review_content' => 'Decent work, could improve cleanup a bit but overall satisfied.'
  ],
  [
    'user_name' => "Priya Nair",
    'service_ordered' => 'Split AC servicing',
    'rating' => '5.0',
    'review_content' => 'Excellent service and very neat work. Will book again.'
  ],
  [
    'user_name' => "Vikram Singh",
    'service_ordered' => 'AC inspection',
    'rating' => '3.8',
    'review_content' => 'Inspection was detailed but pricing felt slightly high.'
  ],
  [
    'user_name' => "Amit Patel",
    'service_ordered' => 'AC deep cleaning',
    'rating' => '4.7',
    'review_content' => 'Thorough cleaning, AC performance improved a lot.'
  ],
  [
    'user_name' => "Neha Kapoor",
    'service_ordered' => 'AC servicing + gas refill',
    'rating' => '4.9',
    'review_content' => 'Very satisfied with service. Quick and efficient.'
  ],
  [
    'user_name' => "Rohit Das",
    'service_ordered' => 'AC repair',
    'rating' => '4.3',
    'review_content' => 'Resolved issue properly. Good experience overall.'
  ]
];
?>

<?php 
  foreach ($reviews as $review): 
  // $isLast = $index === array_key_last($reviews);
?>
  <div class="flex flex-col border-b p-4 ">
    <div class="flex flex-row items-center justify-between">
      <div class="flex-col">
        <div class="text-[17px] font-medium">
          <?= $review['user_name'] ?>
        </div>
        <div class="text-[13px] text-slate-500 truncate">
          <?= $review['service_ordered'] ?>
        </div>
      </div>

      <div class="flex flex-row items-center justify-center gap-1 px-[8px] py-[4px] text-[13px] bg-green-600 text-white rounded leading-none font-semibold">
        <i class="fa-solid fa-star text-[12px]"></i>
        <span class="flex leading-none relative p-1 top-[1px]">
          <?= $review['rating'] ?>
        </span>
      </div>
    </div>

    <p class="text-slate-500 mt-4 text-[16px]">
      <?= $review['review_content'] ?>
    </p>
  </div>
<?php endforeach; ?>