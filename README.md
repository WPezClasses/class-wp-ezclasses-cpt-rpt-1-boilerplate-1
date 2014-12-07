# Org: WPezClasses
### Product: Class_WP_ezClasses_CPT_RPT_1_Boilerplate_1

##### WordPress custom post types done The ezWay. 

This is where your CPT magic happens. Once you set a handful of TODOs and you're up and running. 

Since you're going to edit this, make a copy (and be sure to rename it) of it to your "local" code (i.e., theme or plugin), fill in the TODOs, and that's it. This is all these is to creating CPTs The ezWay.

=======================================================================================

#### WPezClasses: Getting Started
- https://github.com/WPezClasses/wp-ezclasses-docs-getting-started

=======================================================================================

#### Overview

- This class serves as the base. It takes care of some simple housekeeping. You lean on this but there's nothing for you to change here. 

- The next layer up serves as a goto / boilerplate that configures - this is the important bit - a particular type of CPT. For example: https://github.com/WPezClasses/class-wp-ezclasses-cpt-rpt-1-public-exclude-from-search-1.  Again, you lean on this but there's nothing for you to change here. Chances are you'd create a new class for a new middle layer if necessary.

- Finally, this boilerplate top layer (so to speak) is where you'll define a handful of setting that are unique to your CPT. For that, use this: https://github.com/WPezClasses/class-wp-ezclasses-cpt-rpt-1-boilerplate-1. This *is* where you'll be making any changes. Notice how few TODOs it takes to get a CPT up and running. 


Note: While it's possible to skip the middle layer (and move all particulars to the top), that's not going to help accomplish one of our primary goals: increase productivity by minimizing duplicate code / effort. 