class Solution(object):
    nums = [3, 2, 2, 3]
    val = 3

    def removeElement(self, nums, val):
        self.nums = nums
        self.val = val
        result = [num for num in nums if num != val]
        return result

solution = Solution()
result = solution.removeElement(solution.nums, solution.val)
k = len(result)
print(k)
