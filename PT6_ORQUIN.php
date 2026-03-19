# Simple student-style design

# Colors (light use only)
TITLE = "\033[95m"
HEADER = "\033[94m"
RESET = "\033[0m"

# Data
items = ["Lumber", "Concrete", "Drywall", "Paint", "Miscellaneous"]
estimated_costs = [150000, 78000, 69000, 12000, 20000]

# Totals
total_est = 0
total10 = 0
total15 = 0
total20 = 0

# Title
print(TITLE + "Public Library Expansion Project" + RESET)
print("Cost Estimates\n")

# Header (not perfectly aligned on purpose)
print(HEADER + "Item           Estimated     10%       15%       20%" + RESET)
print("-" * 60)

# Table
for i in range(len(items)):
    est = estimated_costs[i]
    inc10 = est + (est * 0.10)
    inc15 = est + (est * 0.15)
    inc20 = est + (est * 0.20)

    total_est += est
    total10 += inc10
    total15 += inc15
    total20 += inc20

    print(f"{items[i]:<14} ${est:,.2f}   ${inc10:,.2f}   ${inc15:,.2f}   ${inc20:,.2f}")

# Totals
print("\nTotal Expenditures:")
print("-" * 60)
print(f"{'':<14} ${total_est:,.2f}   ${total10:,.2f}   ${total15:,.2f}   ${total20:,.2f}")

# Footer
print("\nCreated by: ORQUIN")