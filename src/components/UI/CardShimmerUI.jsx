function CardShimmerUI() {
  return (
    <div className="animate-pulse w-60 flex flex-col gap-2 rounded-lg *:rounded-lg">
      <div className="h-52 bg-gray-400 "></div>
      <div className="flex flex-col gap-2 *:rounded-lg">
        <div className="h-10 flex justify-between *:rounded-lg">
          <div className="h-10 bg-gray-400 w-32"></div>
          <div className="h-10 bg-gray-400 w-20"></div>
        </div>
        <div className="h-10 bg-gray-400"></div>
      </div>
    </div>
  );
}

export default CardShimmerUI;
